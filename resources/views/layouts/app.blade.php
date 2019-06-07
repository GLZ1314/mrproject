<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'QualitySouvenir') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/dist/css/bootstrap.css')}} "/>
    <link rel="stylesheet" href="{{ asset('css/site.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/myStyle.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Quality Souvenir') }}--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"  href="{{ url('/') }}" ><img style="max-height:28px" src="{{ asset('images/home_images/kiwi_maori_logo_top.png')}}" alt="Quality Souvenirs" /></a>
            </div>
            <div class="collapse navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                        <li id="navHome" class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li id="navProduct" ><a href="{{ url('/') }}">Product</a></li>
                        <li id="navAbout" ><a href="{{ url('/home/about') }}">About</a></li>
                        <li id="navContact" ><a href="{{ url('/home/contact') }}">Contact</a></li>
{{--                    @if (User.IsInRole("Admin"))--}}
{{--                        {--}}
{{--                        <li class="dropdown">--}}
{{--                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a asp-area="" asp-controller="Souvenirs" asp-action="Index">Souvenir Management</a></li>--}}
{{--                                <li><a asp-area="" asp-controller="Categories" asp-action="Index">Category Management</a></li>--}}
{{--                                <li><a asp-area="" asp-controller="Suppliers" asp-action="Index">Supplier Management</a></li>--}}
{{--                                <li><a asp-area="" asp-controller="Orders" asp-action="Index">Order Management</a></li>--}}
{{--                                <li><a asp-area="" asp-controller="AdminApplicationUsers" asp-action="Index">Account Management</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        }--}}
{{--                    @endif--}}
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
{{--                                    {{ __('Logout') }}--}}
                                    logout
                                </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    <!-- footer start -->
    <div class="container_wide">
        <footer class="footer" style="margin-top: 200px; bottom: 0;">
            <div class="container">
                <div class="footer-left">
                    <img src="{{asset('images/home_images/quality_souvenirs_logo.png')}}" width="180" alt="Quality Bags" />
                </div>

                <div class="footer-center">

                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>Building 183, 139 Carrington Road </span>Mt Albert, Auckland, New Zealand</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p>+64 0800 10 95 10</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:jearhub@gmail.com">support@qualitysouvenirs.co.nz</a></p>
                    </div>

                </div>

                <div class="footer-right">
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>  <!-- footer end-->
    </div>
<script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{ asset('lib/jquery/dist/jquery.validation.js')}}"></script>
<script src="{{ asset('js/site.js')}}"></script>

</body>
</html>