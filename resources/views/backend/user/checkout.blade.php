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
                    <h2 class="page-title">Checkout</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="index.html">Home / </a> <a href="shopping-cart.html">
                                Shopping
                                Cart</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                        <div class="checkout-left">
                            <h4>Billing Details</h4>
                            <input type="text" placeholder="name" required>
                            <input type="email" placeholder="email address" required>
                            <input type="tel" placeholder="phone" required>
                            <input type="text" placeholder="address">
                            <input type="text" placeholder="order notes(optional)">
                        </div>
                    </div>
                    <div class="col-lg-6  wow fadeInUp ">
                        <div class="checkout-right">
                            <h4>Your Order</h4>
                            <div class="pricing-box">
                                <ul class="p-head">
                                    <li class="uppercase">product</li>
                                    <li class="uppercase">total</li>
                                </ul>
                                <div class="divider"></div>
                                <ul>
                                    <li>Ultimate Photoshop Training</li>
                                    <li>$1,699</li>
                                </ul>
                                <ul>
                                    <li>The Complete Financial Analyst</li>
                                    <li>$1,699</li>
                                </ul>
                                <ul>
                                    <li>The Complete Advanced WP</li>
                                    <li>$1,699</li>
                                </ul>
                                <ul>
                                    <li class="uppercase"><b>subtotal</b></li>
                                    <li><b>$5,699</b></li>
                                </ul>
                                <ul class="bg-white">
                                    <li class="uppercase">total</li>
                                    <li class="total"><b>$5,699</b></li>
                                </ul>
                            </div>
                            <input type="radio" id="check">
                            <label for="check">CHECK PAYMENTS</label>
                            <br>
                            <div class="payment-img">
                                <a href="#"><img src="{!!asset('/images/img/payment.png')!!}" alt=""></a>
                            </div>
                            <input type="radio" id="cash">
                            <label for="cash">CASH ON DELIVERY</label>
                            <br>

                            <input type="radio" id="terms">
                            <label for="terms">I’ve read and accept the <a href="#">terms & conditions *</a></label>
                            <br>
                            <button type="submit" class="btn">place order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection