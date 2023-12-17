@extends('layout.master')

@section('title', 'Login')

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
                    <h2 class="page-title">login page</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> login page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- contact-form-area -->
    <section class="about-area about-area2 writeto-us login-area padding-top-120 signup-area padding-bottom-60">
        <div class="form-shapes">
            <span class="fs1 item-animateOne"><img src="{!!asset('/images/shapes/1.png')!!}" alt=""></span>
            <span class="fs2 item-bounce"><img src="{!!asset('/images/shapes/12.png')!!}" alt=""></span>
            <span class="fs3"><img src="{!!asset('/images/shapes/13.png')!!}" alt=""></span>
            <span class="fs4 item-bounce"><img src="{!!asset('/images/shapes/26.png')!!}" alt=""></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12  wow fadeInUp">
                    <div class="about-left">
                        <div class="about-l-shapes">
                            <span class="als-1"><img src="{!!asset('/images/shapes/2.png')!!}" alt=""></span>
                        </div>
                        <div class="row">
                            <div
                                class="col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-end justify-content-end margin-bottom-20">
                                <div class="about-gallery-1">
                                    <img src="{!!asset('/images/gallery/1.jpg')!!}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-8 margin-bottom-20">
                                <div class="about-gallery-2">
                                    <img src="{!!asset('/images/gallery/2.jpg')!!}" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="about-gallery-3">
                                    <img src="{!!asset('/images/gallery/3.jpg')!!}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 d-flex align-items-stretch ">
                                <div class="about-gallery-5 text-center">
                                    <img src="{!!asset('/images/gallery/5.jpg')!!}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp">
                    <div class="contact-form-area login-form-area signup-form-area">
                        <h3>login to <span>your account</span></h3>
                        <form method="POST" action="{{url('user/login')}}">
                            @csrf 

                            <input type="email" placeholder="Email" name="email" value="{{old('email')}}">
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                            <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                            <div class="login-btn">
                                <button type="submit" class="btn">login account</button>
                                <span>Don't have an account? <a href="{{url('user/signup')}}">Signup here </a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection