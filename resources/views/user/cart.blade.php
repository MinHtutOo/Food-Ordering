@extends('layout.master')

@section('title', 'Shopping Cart')

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
                    <nav aria-label="breadcrumb text-center">
                        <h2 class="page-title">Shopping Cart</h2>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="index.html">Home </a> / </li>
                            <li class="text-white"> &nbsp;Shopping Cart</li>
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
    
        <!-- shopping-cart -->
        <div class="portfolio-info shopping-cart padding-top-120 padding-bottom-90">
            <div class="shopping-shapes">
                <span class="ps1"><img src="{!!asset('/images/shapes/12.png')!!}" alt=""></span>
                <span class="pss2 item-bounce"><img src="{!!asset('/images/shapes/26.png')!!}" alt=""></span>
                <span class="ps3 item-bounce"><img src="{!!asset('/images/shapes/7.png')!!}" alt=""></span>
                <span class="ps4"><img src="{!!asset('/images/img/32.png')!!}" alt=""></span>
                <span class="pss5"><img src="{!!asset('/images/shapes/16.png')!!}" alt=""></span>
                <span class="ps6"><img src="{!!asset('/images/shapes/13.png')!!}" alt=""></span>
            </div>
            <div class="container">
                    <!-- table -->
                <div style="overflow-x:auto;">
                    <table class="table-one">
                        <thead class="table-one-head">
                            <tr class="table-one-tr">
                                <th class="table-one-th" style="width:50%">Product name</th>
                                <th class="table-one-th" style="width:10%">Price</th>
                                <th class="table-one-th" style="width:8%">Quantity</th>
                                <th class="table-one-th text-center" style="width:22%">Subtotal</th>
                                <th class="table-one-th" style="width:10%"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- row 1 -->
                            @foreach($cartItems as $cartItem)
                                @if(($cartItem->menu))
                                    <tr class="{{ $cartItem->trashed() ? 'trashed-row' : '' }}">
                                        <td>
                                            <!--data-th="Product"-->
                                            <div class="d-flex align-items-center">
                                                <!--class="row"-->
                                                <div class=" d-none d-md-block col-md-4">
                                                    <div class="table-img"><img src="{!!asset('/uploads/'.$cartItem->menu->image)!!}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    <h5>{{$cartItem->menu->name}}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>${{$cartItem->menu->price}}</td>
                                        <!--data-th="Price"-->
                                        <td>
                                            <!-- data-th="Quantity"-->
                                            {{-- <input type="number" class="form-control text-center" value="1" min="1"> --}}
                                            <div class="d-flex justify-content-center">
                                                <span class="left" data-id="{{ $cartItem->id }}">
                                                    <i class="fas fa-chevron-left"></i>
                                                </span>
                                                <span class="num" data-id="{{ $cartItem->id }}" data-quantity="1">
                                                    01
                                                </span>
                                                <span class="right" data-id="{{ $cartItem->id }}">
                                                    <i class="fas fa-chevron-right"></i>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="subtotal" data-price="{{ $cartItem->menu->price }}">${{ $cartItem->menu->price }}</span>
                                        </td>
                                        
                                        <!--data-th="Subtotal"  -->
                                        <td>
                                            <!--class="actions" data-th=""-->
                                            @if($cartItem->trashed())
                                                <form method="GET" action="{{ route('restore', $cartItem->id) }}" class="d-inline" style="display:inline-block;">
                                                    @method('PATCH')
                                                    @csrf
                                                    <button class="btn-success cartBtn">
                                                        <i class="fas fa-undo-alt"  style="color: #fff;  margin-top:5px;"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form method="POST" action="{{ route('remove', $cartItem->id) }}" class="d-inline" style="display:inline-block;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn-outline-danger cartBtn">
                                                        <i class="fas fa-times" style="color: #fff; margin-top:5px;"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
    
                <!-- lower table -->
                <div class="row margin-top-60">
                    <form action="">
                        <div class="upper-table margin-bottom-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 margin-bottom-30">
                                    <div class="upper-t-left">
                                        <span>
                                            <p><b>You Have ... Points {{auth()->user()->name}} .</b></p>
                                        </span>

                                        <input type="text" placeholder="Enter Points" style="display:block;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="lower-table">
                                <h6>Proceed to Checkout</h6>
                                <div class="lower-table-info">
                                    <ul id="subtotal" class="d-flex justify-content-between">
                                        <li class="sub">SUBTOTAL</li>
                                        <li>${{}}</li>
                                    </ul>
                                    <hr>
                                    <ul id="grand-total" class="d-flex justify-content-between">
                                        <li>Grand Total</li>
                                        <li>$</li>
                                    </ul>
                                    <button class="btn" type="submit">Proceed to checkout</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const plusButtons = document.querySelectorAll('.right');
                const minusButtons = document.querySelectorAll('.left');
                const numberDisplays = document.querySelectorAll('.num');
                const subtotalElements = document.querySelectorAll('.subtotal');
    
                function updateSubtotal(index) {
                    const quantity = parseInt(numberDisplays[index].textContent, 10);
                    const price = parseFloat(subtotalElements[index].getAttribute('data-price'));
                    const subtotal = quantity * price;
                    subtotalElements[index].textContent = '$' + subtotal.toFixed(2);
    
                    updateTotals();
                }
    
                function updateTotals() {
                    let total = 0;

                    subtotalElements.forEach(subtotalElement => {
                        total += parseFloat(subtotalElement.textContent.replace('$', '')) || 0;
                    });

                    document.getElementById('subtotal').lastElementChild.textContent = '$' + total.toFixed(2);
                    document.getElementById('grand-total').lastElementChild.textContent = '$' + total.toFixed(2);
                }

    
                plusButtons.forEach((plusButton, index) => {
                    plusButton.addEventListener('click', () => {
                        let i = parseInt(numberDisplays[index].textContent, 10);
                        i++;
                        i = (i < 10) ? '0' + i : i;
                        numberDisplays[index].textContent = i;
                        updateSubtotal(index);
                    });
                });
    
                minusButtons.forEach((minusButton, index) => {
                    minusButton.addEventListener('click', () => {
                        let i = parseInt(numberDisplays[index].textContent, 10);
                        if (i > 1) {
                            i--;
                            i = (i < 10) ? '0' + i : i;
                            numberDisplays[index].textContent = i;
                            updateSubtotal(index);
                        }
                    });
                });
    
                updateTotals();
            });
        </script>
@endsection

{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        const plusButtons = document.querySelectorAll('.right');
        const minusButtons = document.querySelectorAll('.left');
        const numberDisplays = document.querySelectorAll('.num');
        const subtotalElements = document.querySelectorAll('.subtotal');

        function updateSubtotal(index) {
            const quantity = parseInt(numberDisplays[index].textContent, 10);
            const price = parseFloat(subtotalElements[index].getAttribute('data-price'));
            const subtotal = quantity * price;
            subtotalElements[index].textContent = '$' + subtotal.toFixed(2);

            updateTotals();
        }

        function updateTotals() {
            let total = 0;

            subtotalElements.forEach(subtotalElement => {
                total += parseFloat(subtotalElement.textContent.replace('$', '')) || 0;
            });

            document.getElementById('subtotal').textContent = '$' + total.toFixed(2);
        }

        plusButtons.forEach((plusButton, index) => {
            plusButton.addEventListener('click', () => {
                let i = parseInt(numberDisplays[index].textContent, 10);
                i++;
                i = (i < 10) ? '0' + i : i;
                numberDisplays[index].textContent = i;
                updateSubtotal(index);
            });
        });

        minusButtons.forEach((minusButton, index) => {
            minusButton.addEventListener('click', () => {
                let i = parseInt(numberDisplays[index].textContent, 10);
                if (i > 1) {
                    i--;
                    i = (i < 10) ? '0' + i : i;
                    numberDisplays[index].textContent = i;
                    updateSubtotal(index);
                }
            });
        });

        updateTotals();
    });
</script> --}}









