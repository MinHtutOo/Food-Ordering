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
            <form action="{{ route('place.order') }}" method="POST" id="payment-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6  wow fadeInUp">
                        <div class="checkout-left">
                            <h4>Billing Details</h4>
                            <input type="text" value="{{ $customer->name }}">
                            <input type="email" value="{{ $customer->email }}">
                            <input type="tel" value="{{ $customer->phone }}">
                            <input type="text" value="{{ $customer->address }}">       
                        </div>
                    </div>
                    <div class="col-lg-6  wow fadeInUp ">
                        <div class="checkout-right">
                            <h4>Your Order</h4>
                            <div class="pricing-box">
                                <ul class="p-head">
                                    <li class="uppercase">Product</li>
                                    <li class="uppercase">Total</li>
                                </ul>
                                <div class="divider"></div>
                
                                @foreach($orders as $order)
                                    <ul>
                                        <li>{{ $order->menu->name }}</li>
                                        <li>${{ $order->menu->price }}</li>
                                        <!-- Add hidden fields for each order -->
                                        <input type="hidden" name="product_names[]" value="{{ $order->menu->name }}">
                                        <input type="hidden" name="product_prices[]" value="{{ $order->menu->price }}">
                                    </ul>
                                @endforeach
                
                                <ul>
                                    <li class="uppercase"><b>Subtotal</b></li>
                                    <li><b>${{ $orders->sum('menu.price') }}</b></li>
                                </ul>
                
                                <ul class="bg-white">
                                    <li class="uppercase">Total</li>
                                    <li class="total"><b>${{ $orders->sum('menu.price') }}</b></li>
                                </ul>
                            </div>
                
                            <h4>Payment Method</h4>
                            <input type="radio" name="payment_method" id="stripe" value="stripe">
                            <label for="stripe">Stripe</label>
                            <br>
                
                            <input type="radio" name="payment_method" id="cash" value="cash">
                            <label for="cash">CASH ON DELIVERY</label>
                            <br>

                            <!-- Add Stripe Elements container -->
                            <div id="card-element"></div>
                            <div id="card-errors" role="alert"></div>
                
                            <button type="submit" class="btn" id="submit-button">Place Order</button>
                        </div>
                    </div>

                    
                </div>
            </form>
        </div>
    </div>
@endsection

<script src="https://js.stripe.com/v3/" data-publishable-key="{{ config('services.stripe.key') }}"></script>

<script>
    $(document).ready(function () {
        var stripe = Stripe('pk_test_51O6oVWEBeZfFRhurjoMsoOm4NwGP6dWHitEkGNUPoMrJFRSVgCd6I9MG74yzqXMEycwQms4Z8taD0QX0fZUONN6k00xjTUSQdx');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.createPaymentMethod({
                type: 'card',
                card: card,
            }).then(function (result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Include CSRF token in the headers for AJAX
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    fetch('/your-endpoint', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify({
                            payment_method_id: result.paymentMethod.id,
                            // Other form data...
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Handle the response from the server
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }
            });
        });
    });
</script>

