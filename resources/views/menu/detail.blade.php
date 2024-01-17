@extends('layout.master')

@section('title', 'Food Detail')

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
                    <h2 class="page-title">Welcome!</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home </a> /
                        </li>
                        <li class="text-white" aria-current="page">{{$dish->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- chicken-recipe-area -->
    <section class="chicken-recipe-area padding-top-115 padding-bottom-80">
        <div class="recipe-shapes">
            <span class="rs1"><img src="{!!asset('/images/shapes/12.png')!!}" alt=""></span>
            <span class="rs2"><img src="{!!asset('/images/shapes/13.png')!!}" alt=""></span>
            <span class="rs3"><img src="{!!asset('/images/shapes/26.png')!!}" alt=""></span>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 margin-bottom-30 wow fadeInLeft">
                    <div class="recipe-left">
                        <div class="slider-for">
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp img-fluid" src="{{asset('uploads/' . $dish->image)}}" alt="{{$dish->name}}" style="width:90%;height:550px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="recipe-right">
                        @if(auth()->guard('web')->check())
                            <h2>{{$dish->name}}</h2>
                            <div class="chickens-inforbar d-flex align-items-center rounded-top">
                                <span class="cp ms-3">Price: $ {{$dish->price}} </span>
                            </div>

                            <div class="container p-3 rounded-bottom" style="background-color: #ffedee;">
                                <h4>
                                    Eat Properly & To Get Healthy!
                                </h4>
                            </div>
                        @elseif(auth()->guard('customer')->check())
                            <h2>{{$dish->name}}</h2>
                            <div class="chickens-inforbar d-flex align-items-center rounded-top">
                                <span class="cp ms-3">Price: $ {{$dish->price}} </span>
                            </div>

                            <div class="container p-3 rounded-bottom mb-3" style="background-color: #ffedee;">
                                <h4>
                                    Eat Properly & To Get Healthy!
                                </h4>
                            </div>
                            
                            <div class="chickens-inforbar d-flex align-items-center">
                                <span class="rate ms-3 my-3"><a href="#" class="text-white"><i class="fas fa-star"></i> rate</a></span>
                            </div>
                            <form action="#" method="POST">
                                <div class="chickens-details d-flex justify-content-between">
                                    <span>
                                        <input type="number" value="1" min="1" style="width: 170px;padding: 10px">
                                    </span>
                                </div>
                                <button type="submit" class="btn">add to cart</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product-description -->
    <section class="product-des-area">
        <div class="pdes-shapes">
            <span class="pds1"><img src="{!!asset('/images/img/32.png')!!}" alt=""></span>
            <span class="pds2"><img src="{!!asset('/images/shapes/7.png')!!}" alt=""></span>

        </div>
        <div class="container">
            <div class="product-des-nav margin-bottom-30">
                <ul class="nav" id="productDesTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" role="tab"
                            aria-controls="des" aria-selected="true">Description</div>
                    </li>
                </ul>

            </div>
            <div class="product-des-content w-75">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="info-tab">
                        <div class="pd-inner-content">
                            <div class="pd-shapes">
                                <span class="pds1"><img src="{!!asset('/images/shapes/17.png')!!}" alt=""></span>
                                <span class="pds2"><img src="{!!asset('/images/shapes/7.png')!!}" alt=""></span>
                                <span class="pds3"><img src="{!!asset('/images/shapes/28.png')!!}" alt=""></span>
                            </div>

                            <p>{!! str_replace('.', '.<br>', $dish->description) !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container d-flex justify-content-end">
            <span>
                <a href="{{route('myRestaurant')}}" class="btn btn-primary my-3"> back</a>
            </span>
        </div>
    </section>
@endsection