@extends('layout.master')

@section('title', 'My Restaurant')

@section('content')
    @if($restaurant)
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
                        <h2 class="page-title">Welcome! {{$user->name}}</h2>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a> / </li>
                            <li class="text-white">My Restaurant</li>
                        </ol>
                    </nav>
                </div>
            </div>
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
            <div class="container mb-5 d-flex justify-content-end">
                <h3 class="section-title">Add Dishes:</h3>
                <a href="#" class="btn ms-3">Add </a>
            </div>
            <div class="container">
                <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center  margin-bottom-60">
                    <ul class="nav" id="nav-tab-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="food1-tab" data-bs-toggle="tab" data-bs-target="#food1"
                                type="button" role="tab" aria-controls="food1" aria-selected="true"><span><i
                                        class="fas fa-th"></i></span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="food2-tab" data-bs-toggle="tab" data-bs-target="#food2"
                                type="button" role="tab" aria-controls="food1" aria-selected="false"><span><i
                                        class="fas fa-th-list"></i></span></button>
                        </li>
                    </ul>

                    <span>There are 16 products.</span>
                    <div class="sorting-area">
                        <span class="margin-right-20">sort by : </span>
                        <span>sort by price: </span>
                        <span>
                            <select name="#" id="#">
                                <option value="#">high to low</option>
                                <option value="#">low to high</option>
                                <option value="#">high to low</option>
                            </select>
                        </span>
                    </div>
                </nav>
                <!-- main-content -->
                <div class="tab-content" id="nav-tabContent-1">

                    <!-- food 1 -->
                    <div class="tab-pane fade show active" id="food1" role="tabpanel" aria-labelledby="food1-tab">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd3.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="{{url('restaurant/menu')}}">Chicken Recipe
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price badge-color">price :$15.00</span>
                                        <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                    </div>
                                    <span class="badge badge-bg-color">new</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd1.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Garlic Burger
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge">hot</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd2.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="single-food.html">Vegetable Pizza
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd4.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Chickpea Soup
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>
                                    </div>
                                    <span class="badge">sale</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd5.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Garlic Burger
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>
                                    </div>
                                    <span class="badge">hot</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd6.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="single-food.html">Vegetable Pizza
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd7.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Chicken Recipe
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="badge-color price">price :$15.00</span>
                                        <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd8.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Chickpea Soup
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge">sale</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- food 2 -->
                    <div class="tab-pane fade" id="food2" role="tabpanel" aria-labelledby="food2-tab">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd1.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Vegetable Pizza
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge">hot</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd2.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="single-food.html">Garlic Burger
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd3.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="single-food.html">Chicken Recipe
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price badge-color">price :$15.00</span>
                                        <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                    </div>
                                    <span class="badge badge-bg-color">new</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd4.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Chickpea Soup
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>
                                    </div>
                                    <span class="badge">sale</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd5.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Garlic Burger
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>
                                    </div>
                                    <span class="badge">hot</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd6.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="single-food.html">Vegetable Pizza
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd7.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Chicken Recipe
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="badge-color price">price :$15.00</span>
                                        <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                    </div>
                                    <span class="badge"></span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <img src="{!!asset('/images/menu-item/pd8.png')!!}" style="width: inherit;" alt="">
                                    </div>
                                    <div class="dish-content">
                                        <h5><a href="single-food.html">Chickpea Soup
                                            </a></h5>
                                        <p>It is a long established fact that a reader BBQ food Chicken.</p>
                                        <span class="price">price :$15.00</span>

                                    </div>
                                    <span class="badge">sale</span>
                                    <div class="cart-opt">
                                        <span>
                                            <a href="#"><i class="fas fa-heart"></i></a>
                                        </span>
                                        <span>
                                            <a href="single-food.html"><i class="fas fa-shopping-basket"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- pagination-area -->
            <div class="pagination-area">
                <div class="container">
                    <div class="pagination">
                        <a class="active" href="#">01</a>
                        <a href="#">02</a>
                        <a href="#">03</a>
                    </div>
                </div>
            </div>
        </section>
    @else
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
                        <h2 class="page-title">Welcome {{$user->name}}</h2>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a> / </li>
                            <li class="text-white">My Restaurant</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="food-area  popular-dishes-area padding-top-110 padding-bottom-110">
            <div class="container">
                <h2>You haven't created a restaurant yet.</h2>
                <a href="{{ route('restaurant.create') }}" class="btn btn-primary">Create Your Restaurant</a>
            </div>
        </section>
    @endif
@endsection