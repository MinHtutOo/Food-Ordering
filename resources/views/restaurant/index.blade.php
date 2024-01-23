@extends('layout.master')

@section('title', 'Restaurant Lists')

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
                    <h2 class="page-title">Restaurants List</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a> /</li>
                        <li class="text-white"> &nbsp;Restaurants List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container my-3">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{session('error')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <!-- food area -->
    <section class="food-area  popular-dishes-area padding-top-110 padding-bottom-110">
        <div class="pshapes">
            <span class="ps-1"><img src="{!!asset('/images/img/32.png')!!}" alt=""></span>
            <span class="ps-2 item-animateOne"><img src="{!!asset('/images/shapes/12.png')!!}" alt=""></span>
            <span class="ps3 item-bounce"><img src="{!!asset('/images/shapes/13.png')!!}" alt=""></span>
            <span class="ps-4"><img src="{!!asset('/images/shapes/14.png')!!}" alt=""></span>
            <span class="ps-5"><img src="{!!asset('/images/img/6.png')!!}" alt=""></span>
            <span class="ps-6"><img src="{!!asset('/images/shapes/16.png')!!}" alt=""></span>
            <span class="ps-7 item-bounce"><img src="{!!asset('/images/img/6.png')!!}" alt=""></span>
        </div>
        <div class="container">
            <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center  margin-bottom-60">
                <ul class="nav" id="nav-tab-5" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="food1-tab" data-bs-toggle="tab" data-bs-target="#food1"
                            type="button" role="tab" aria-controls="food1" aria-selected="true"><span><i
                                    class="fas fa-th"></i></span></button>
                    </li>
                </ul>

                <span>There are {{$restaurants->count()}} restaurants.</span>

            </nav>
            <!-- main-content -->
            <div class="tab-content" id="nav-tabContent-1">

                <!-- food 1 -->
                <div class="tab-pane fade show active" id="food1" role="tabpanel" aria-labelledby="food1-tab">
                    <div class="row">
                        @foreach($restaurants as $restaurant)
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="single-dishes">
                                    <div class="dish-img mb-3">
                                        @if (isset($restaurant->images) && is_array($restaurant->images) && count($restaurant->images) > 0)
                                            <div class="card restaurant" style="background-image: url({{ asset('/uploads/' . $restaurant->images[0]) }});"> 
                                            </div>
                                        @else
                                            <div class="card">
                                                <p>No images available 
                                                    <br>for this restaurant</p>
                                            </div>   
                                        @endif                                 
                                    </div>
                                    <div class="dish-content">
                                        <h5 class="text-center"> 
                                            <a href="{{ route('menu', $restaurant->id) }}">{{$restaurant->name}}</a> 
                                        </h5>

                                        <p class="text-center"><b>Opening Hour -</b> {{ \Carbon\Carbon::createFromFormat('H:i:s', $restaurant->opening_hour)->format('g:i A') }}</p>

                                        <p class="text-center"><b>Closing Hour -</b> {{ \Carbon\Carbon::createFromFormat('H:i:s', $restaurant->closing_hour)->format('g:i A') }}</p>
                                    </div>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="{{route('restaurant.detail', $restaurant->id)}}"><i class="fas fa-info-circle"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- pagination-area -->
        {{$restaurants->links()}}
    </section>
@endsection