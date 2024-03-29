@extends('layouts.app')
@section('title', 'About')
@section('content')

    <h2></h2>
    <h3></h3>

    <div class="row">
        <div class="col-md-7">
            <h2 style="text-align: center"><strong>Making Shopping Easier</strong></h2>
            <p>
                This website is an online shopping website for Quality Souvenirs which is a fictional company selling New Zealand souvenirs.
                <br><br>
                The details include the business specifications which specify and describe the business rules implemented in the website. It also includes a site map and wireframe diagrams for the User Interface design.
                <br><br>
                Additionally, a completed test plan is included that shows the test sequences for all features, error handling and pagination with actual results shown.
                <br><br>
                The website application itself was developed using Visual Studio 2017 version 2.2.0 using ASP.NET Core, C# programming language and runs Microsoft SQL server for its database.
                <br><br>
                Moreover, the website contents comprise a category section containing categories such as T-shirts, Mugs and Maori Souvenirs.
                <br><br>
                Within each category are various souvenir items displayed in what we call the ‘catalogue area’. The website catalogue can be browsed by both anonymous and registered members and items can be added to what we would call a ‘shopping cart’, but only the registered members can place an order, or make a purchase.
            </p>
        </div>
        <div class="col-md-5">
            <a href="../Catalogue"><img src="~/images/banner6.jpg" alt=""></a>
        </div>

    </div>
@endsection