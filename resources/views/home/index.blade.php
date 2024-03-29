@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <H1>Hello Car Supplier</H1>--}}
{{--            <H2>No css currently</H2>--}}
{{--            <H3>I am h3</H3>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/banner1.jpg')}}" alt="ASP.NET" class="img-responsive" />
                <div class="carousel-caption" role="option">
                    <p>
                    <h2>Get ideal souvenirs for that special someone from </h2><h1><strong> our Maori gifts</strong></h1>
                    <a class="btn btn-default" href="../Catalogue">
                        Shop Now
                    </a>
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('images/banner2.jpg')}}" alt="Visual Studio" class="img-responsive" />
                <div class="carousel-caption" role="option">
                    <p>
                    <h2>Great for layering under your sweater are amazing </h2><h1><strong>T-shirts for everyone</strong></h1>
                    <a class="btn btn-default" href="../Catalogue">
                        Shop Now
                    </a>
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('images/banner3.jpg')}}" alt="Microsoft Azure" class="img-responsive" />
                <div class="carousel-caption" role="option">
                    <p>
                    <h2>Enjoy your favourite cuppa with </h2><h1><strong>affordable Mugs</strong></h1>
                    <a class="btn btn-default" href="../Catalogue">
                        Shop Now
                    </a>
                    </p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <a href="../Catalogue"><img class="img-responsive" src="{{asset('images/home_images/maori1.jpg')}}" alt=""></a>
            <div>
                <h4 style="text-align:center">
                    <a href="../Catalogue">Maori Gifts</a>
                </h4>
            </div>
        </div>
        <div class="col-md-4">
            <a href="../Catalogue"><img class="img-responsive" src="{{asset('images/home_images/t-shirt1.png')}}" alt=""></a>
            <div>
                <h4 style="text-align:center">
                    <a href="../Catalogue">T-shirts</a>
                </h4>
            </div>
        </div>
        <div class="col-md-4">
            <a href="../Catalogue"><img class="img-responsive" src="{{asset('images/home_images/mug3.jpg')}}" alt=""></a>
            <div>
                <h4 style="text-align:center">
                    <a href="../Catalogue">Mugs</a>
                </h4>
            </div>
        </div>
        <div>
            <div class="container">
                <a href="../Catalogue"><img class="img-responsive" src="{{asset('images/banner5.jpg')}}" alt=""></a>
            </div>
            <div>
                <h4 style="text-align:center">
                    <a href="../Catalogue">All Categories</a>
                </h4>
                <br>
            </div>
        </div>
    </div>
@endsection
