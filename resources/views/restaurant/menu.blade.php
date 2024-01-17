@extends('layout.master')

@section('title', 'Menu')

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
                    <h2 class="page-title">Menu item</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> menu item</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- food-items countdown -->
    <div class="foods-counter menus-area">
        <div class="container">
            <div class="row foods-wrapper menus-wrapper">
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{!!asset('/images/menu-item/menu2.png')!!}" alt="">
                        <h6>Super Fast Delivery</h6>
                        <p>Free Delivery in you Location</p>
                        <a href="{{url('user/cart')}}">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{!!asset('/images/menu-item/menu1.png')!!}" alt="">
                        <h6>100% Best Quality</h6>
                        <p>We Provide Best Quality Food</p>
                        <a href="shopping-cart.html">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{!!asset('/images/menu-item/menu3.png')!!}" alt="">
                        <h6>Money Back Guarantee</h6>
                        <p>100% Money Back Guarantee</p>
                        <a href="shopping-cart.html">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-food single-menus">
                        <img src="{!!asset('/images/menu-item/menu4.png')!!}" alt="">
                        <h6>Delicious Food Menu</h6>
                        <p>Food Khan Provide Best Food</p>
                        <a href="shopping-cart.html">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- chicken tab-area -->
    <section class="menu-area pizza-area burger-area chicken-area padding-top-40">
        <div class="menu-i-shapes">
            <span class="bleft"><img src="{!!asset('/images/menu-item/bleft.png')!!}" alt=""></span>
        </div>
        <div class="container">
            <div class="common-title-area text-center padding-40">
                <h3>food items</h3>
                <h2>food <span>categories</span></h2>
            </div>
            <!-- menu-nav-wrapper -->
            <div class="menu-nav-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="scrollable-tabs-container">
                            <ul class="nav over" id="myTab" role="tablist">
                                @foreach($categories as $key => $category)
                                <!-- menu-nav-1 -->
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link {{$key == 0 ? 'active' : ''}}" id="nav-chicken-{{$key + 1}}"
                                        data-bs-toggle="tab" data-bs-target="#chicken-{{$key + 1}}" role="tab"
                                        aria-controls="chicken-{{$key + 1}}" aria-selected="{{$key == 0 ? 'true' : 'false'}}">
    
                                        <div class="single-menu-nav pizza-single-menu-nav text-center">
                                            <h6>{{$category->name}}</h6>
                                            <span class="g-s-4"><img src="{!!asset('/images/shapes/10.png')!!}" alt=""></span>
                                            <span class="g-s-5"><img src="{!!asset('/images/shapes/14.png')!!}" alt=""></span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- menu-items-wrapper -->
            <div class="tab-content" id="nav-tabContent">
                @foreach($categories as $key => $category)
                    <div class="tab-pane fade {{$key == 0 ? 'show active' : ''}}" id="chicken-{{$key + 1}}" role="tabpanel"
                        aria-labelledby="nav-chicken-{{$key + 1}}">
                        <div class="menu-items-wrapper pizza-items-wrapper margin-top-50">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        @foreach($category->menuItems()->where('restaurant_id', $id)->orderBy('id', 'desc')->get() as $menuItem)
                                        <div class="col-lg-4 col-md-4">
                                            <div class="single-menu-item d-flex justify-content-between">
                                                <div class="menu-img">
                                                    <img src="{!!asset('/uploads/' . $menuItem->image)!!}" alt="">
                                                </div>
                                                <div class="menu-content">
                                                    <h6><a href="{{route('menuItem.detail' , $menuItem->id)}}">{{$menuItem->name}}</a></h6>
                                                    <p>{{Str::limit($menuItem->description, 50)}}</p>
                                                    <span>price: ${{$menuItem->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial padding-bottom-120 padding-top-80">
        <div class="container">
            <div class="testi-shapes">
                <span class="ts-1"><img src="{!!asset('/images/img/31.png')!!}" alt=""></span>
                <span class="ts-2"><img src="{!!asset('/images/img/32.png')!!}" alt=""></span>
                <span class="ts-3"><img src="{!!asset('/images/shapes/7.png')!!}" alt=""></span>
            </div>
            <div class="common-title-area text-center padding-bottom-50">
                <h3>testimonial</h3>
                <h2>client <span>feedback</span></h2>
            </div>
            <div class="testimonial-active">
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-1.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-2.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-1.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-2.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-1.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-2.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-1.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
                <div class="single-testimonial">
                    <div class="testi-top">
                        <div class="tin-shapes">
                            <span class="tsin-1"><img src="{!!asset('/images/shapes/33.png')!!}" alt=""></span>

                        </div>
                        <div class="testi-img">
                            <img src="{!!asset('/images/testimonial/testi-2.png')!!}" alt="">
                        </div>
                        <div class="testi-meta">
                            <h6>Christ Deo</h6>
                            <p>CEO A4Tech Ltd.</p>
                            <div class="testi-rating">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <p>Food Khan is a gret Restaurant from the University of Texas at Austin has been
                        researching
                        the benefits of frequent testing and the feedback
                        leads to. He explains that in the history of the study.</p>
                </div>
            </div>
        </div>
    </section>
@endsection