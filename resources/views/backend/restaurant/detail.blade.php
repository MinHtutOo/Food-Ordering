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
                    <h2 class="page-title">Chicken Fry Recipe</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home </a> / <a href="index.html"> food shop</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Chicken Fry Recipe</li>
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
                                    <img class="mp" src="{!!asset('/images/img/br1.png')!!}" alt="">
                                    <img class="pbadge" src="{!!asset('/images/icons/pbadge.png')!!}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{!!asset('/images/img/br1.png')!!}" alt="">
                                    <img class="pbadge" src="{!!asset('/images/icons/pbadge.png')!!}" alt="">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="product-content">
                                    <img class="mp" src="{!!asset('/images/img/br1.png')!!}" alt="">
                                    <img class="pbadge" src="{!!asset('/images/icons/pbadge.png')!!}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="slider-nav margin-top-30">
                            <div class="div">
                                <div class="pnav">
                                    <img src="{!!asset('/images/img/br3.png')!!}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{!!asset('/images/img/br2.png')!!}" alt="">
                                </div>
                            </div>
                            <div class="div">
                                <div class="pnav">
                                    <img src="{!!asset('/images/img/br3.png')!!}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="recipe-right">
                        <h2>Chicken Fry Recipe</h2>
                        <form action="#">
                            <div class="chickens-inforbar d-flex justify-content-around align-items-center">
                                <span class="cp">$10.00 <del>$100.00</del></span>
                                <span class="rate"> 5<i class="fas fa-star"></i></span>
                                <span> <span class="colored"><i class="fas fa-comments"></i></span> comment</span>
                                <span> <span class="colored"><i class="fas fa-heart"></i></span> 200+ like</span>
                            </div>
                            <p>Thing lesser replenish evening called void a sea blessed meat fourth called moveth place
                                Quarter Rack of Ribs served with your choice of side Pulled Pork, Beer Braised Brisket.
                            </p>
                            <div class="chickens-details d-flex justify-content-between">
                                <span><input type="number" placeholder="01"></span>
                            </div>
                            <button type="submit" class="btn">add to cart</button>
                        </form>
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
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" role="tab"
                            aria-controls="info" aria-selected="false">Additional information</div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" role="tab"
                            aria-controls="reviews" aria-selected="false">Reviews</div>
                    </li>
                </ul>

            </div>
            <div class="product-des-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="info-tab">
                        <div class="pd-inner-content">
                            <div class="pd-shapes">
                                <span class="pds1"><img src="{!!asset('/images/shapes/17.png')!!}" alt=""></span>
                                <span class="pds2"><img src="{!!asset('/images/shapes/7.png')!!}" alt=""></span>
                                <span class="pds3"><img src="{!!asset('/images/shapes/28.png')!!}" alt=""></span>
                            </div>

                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info">
                        <div class="pd-inner-content">
                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="pd-inner-content">
                            <p>A hamburger (also burger for short) is a sandwich consisting of one or more cooked
                                patties of ground meat, usually beef, placed inside a sliced bread roll or bun. The
                                patty may be pan fried, grilled, smoked or flame broiled. Hamburgers are often served
                                with cheese.</p>
                            <p> <b>Ingredients </b> Focaccia bun, Balsamic Vinaigrette, Pesto, Tomato, Swiss Cheese</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection