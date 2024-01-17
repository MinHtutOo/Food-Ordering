@extends('layout.master')

@section('title', 'Checkout')

@section('content')
    <!-- breadcrumb-area -->
    <div class="banner-area breadcrumb-area padding-top-120 padding-bottom-90">
        <div class="bread-shapes">
            <span class="b-shape-1 item-bounce"><img src="{!!asset('/images/img/5.png')!!}" alt=""></span>
            <span class="b-shape-2"><img src="{!!asset('/images/img/6.png')!!}" alt=""></span>
            <span class="b-shape-3"><img src="{!!asset('/images/img/7.png')!!}" alt=""></span>
            <span class="b-shape-4"><img src="{!!asset('/images/img/9.png')!!}" alt=""></span>
            <span class="b-shape-5"><img src="{!!asset('/images/shapes/18.png')!!}" alt=""></span>
            <span class="b-shape-6 item-animateOne"><img src="{!!asset('/images/img/7.png')!!}" alt=""></span>
        </div>
        <div class="container padding-top-120">
            <div class="row justify-content-center">
                <nav aria-label="breadcrumb">
                    <h2 class="page-title">detail</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home / </a> <a href="{{url('restaurants')}}">
                                Restaurant / 
                                </a></li>
                        <li class="text-white"> &nbsp;Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- checkout-area -->
    <div class="checkout-area padding-top-120 padding-bottom-120">
        <div class="cshapes">
            <span class="cs-1"><img src="{!!asset('/images/img/6.png')!!}" alt=""></span>
            <span class="cs-2 item-bounce"><img src="{!!asset('/images/shapes/12.png')!!}" alt=""></span>
            <span class="cs-3"><img src="{!!asset('/images/shapes/13.png')!!}" alt=""></span>
            <span class="cs-4"><img src="{!!asset('/images/shapes/14.png')!!}" alt=""></span>
            <span class="cs-5"><img src="{!!asset('/images/img/32.png')!!}" alt=""></span>
            <span class="cs-6"><img src="{!!asset('/images/shapes/16.png')!!}" alt=""></span>
        </div>
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6  wow fadeInUp">
                        <div class="checkout-left" style="height: 500px;">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    @foreach($restaurant->images as $image)
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <a href="{{asset('uploads/' . $image)}}" class="d-block restaurant-img" target="_blank">
                                                <img src="{{asset('uploads/' . $image)}}" class="d-block restaurant-img" alt="...">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button> 
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  wow fadeInUp ">
                        <div class="checkout-right">
                            <h4>{{$restaurant->name}}</h4>
                            <div class="divider"></div>
                                <ul>
                                    <li><b>Address : </b> {{$restaurant->address}}</li>
                                    <li><b>Phone &emsp;: </b> {{$restaurant->phone}}</li>
                                    <br>
                                    <li><b>Opening Hour :</b> {{ \Carbon\Carbon::createFromFormat('H:i:s', $restaurant->opening_hour)->format('g:i A') }}</li>
                                    <li><b>Closing Hour &nbsp; :</b> {{ \Carbon\Carbon::createFromFormat('H:i:s', $restaurant->closing_hour)->format('g:i A') }}</li>
                                </ul>
                            <br>
                            <div class="text-center">
                                <a href="{{route('menu', $restaurant->id)}}" class="btn menu">Menu</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
