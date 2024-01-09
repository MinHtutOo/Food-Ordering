@extends('layout.master')

@section('title', 'My Restaurant')

@section('content')
    <style>
        .page-item.active .page-link{
            z-index: 3;
            color: #fff !important  ;
            background-color: #000000 !important;
            border-color: #000000 !important;
            border-radius: 50%;
            padding: 6px 12px;
        }
        .page-link{
            z-index: 3;
            color: #000000 !important;
            background-color: #fff;
            border-color: #000000;
            border-radius: 50%;
            padding: 6px 12px !important;
        }
        .page-item:first-child .page-link{
            border-radius: 10% !important;
        }
        .page-item:last-child .page-link{
            border-radius: 10% !important;
        }
        .pagination li{
            padding: 3px;
        }
        .disabled .page-link{
            color: #212529 !important;
            opacity: 0.5 !important;
        }
    </style>

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
                            <li class="text-white"> &nbsp;My Restaurant</li>
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
            <div class="container mb-5 d-flex justify-content-end">
                <h3 class="section-title">Add Dishes:</h3>
                <a href="{{route('menu.create')}}" class="btn ms-3">Add </a>
            </div>
            <div class="container">
                <nav class="popular-tab-nav d-flex flex-wrap justify-content-between align-items-center  margin-bottom-60">
                    <ul class="nav" id="nav-tab-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="food1-tab" data-bs-toggle="tab" data-bs-target="#food1"
                                type="button" role="tab" aria-controls="food1" aria-selected="true"><span><i
                                        class="fas fa-drumstick-bite"></i></span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="food2-tab" data-bs-toggle="tab" data-bs-target="#food2"
                                type="button" role="tab" aria-controls="food1" aria-selected="false"><span><i
                                        class="fas fa-trash-restore-alt"></i></span></button>
                        </li>
                    </ul>
                    <span>There are {{$productCount}} products.</span>
                    <div class="sorting-area">
                        <span class="margin-right-20">sort by : </span>
                        <span>sort by price: </span>
                        <span>
                            <form action="{{ route('myRestaurant') }}" method="get" class="form-inline" style="display:inline-block;">
                                <select name="sort" onchange="this.form.submit()">
                                    <option value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>Default</option>
                                    <option value="high_to_low" {{ request('sort') == 'high_to_low' ? 'selected' : '' }}>Price: High to Low</option>
                                    <option value="low_to_high" {{ request('sort') == 'low_to_high' ? 'selected' : '' }}>Price: Low to High</option>
                                </select>
                            </form>
                        </span>
                    </div>
                </nav>
                <!-- main-content -->
                <div class="tab-content" id="nav-tabContent-1">

                    <!-- food 1 -->
                    <div class="tab-pane fade show active" id="food1" role="tabpanel" aria-labelledby="food1-tab">
                        <div class="row">
                            @foreach($dishes as $dish)
                            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="single-dishes">
                                    <div class="dish-img">
                                        <a href="{{asset('/uploads/' . $dish->image)}}" target="_blank" style="width: inherit;">
                                            <img src="{{asset('/uploads/' . $dish->image)}}" alt="" style="border-radius: 50%;">
                                        </a>
                                    </div>
                                    <div class="dish-content">
                                        <h5> <a href="{{route('menu.detail', $dish->id)}}">{{Str::limit($dish->name, 15)}}
                                            </a></h5>
                                        <p>{{Str::limit($dish->description, 90)}}</p>
                                        <span class="price badge-color">price :${{$dish->price}}</span>
                                        <span class="rating"> <i class="fas fa-star"></i> 5star</span>
                                    </div>
                                    <!--span class="badge badge-bg-color">new</span-->
                                    <div class="cart-opt">
                                        <span>
                                            <a href="{{route('menu.edit', $dish->id)}}" title="Edit"><i class="fas fa-edit"></i></a>
                                        </span>
                                        <span>
                                            <form method="POST" action="{{ route('menu.destroy', $dish->id) }}" class="d-inline" style="display:inline-block;">
                                                @method('DELETE')
                                                @csrf
                                                <button style="border:none;background-color:transparent" title="Delete">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>
                                            </form> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- food 2 -->
                    <div class="tab-pane fade" id="food2" role="tabpanel" aria-labelledby="food2-tab">
                        <div class="row">
                            @foreach($trashedDishes as $trashedDish)
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="single-dishes">
                                        <div class="dish-img">
                                            <a href="{{asset('/uploads/' . $trashedDish->image)}}" target="_blank" style="width: inherit;">
                                                <img src="{{asset('/uploads/' . $trashedDish->image)}}" alt="" style="border-radius: 50%;">
                                            </a>
                                        </div>
                                        <div class="dish-content">
                                            <h5><a href="{{route('menu.detail', $dish->id)}}">{{Str::limit($trashedDish->name, 15)}}
                                                </a></h5>
                                            <p>{{Str::limit($trashedDish->description, 90)}}</p>
                                            <span class="price">price :${{$trashedDish->price}}</span>

                                        </div>
                                        <!--span class="badge">hot</span-->
                                        <div class="cart-opt">
                                            <span>
                                                <a href="{{route('menu.restore', $trashedDish->id)}}" title="Restore"><i class="fas fa-undo-alt"></i></a>
                                            </span>
                                            <span>
                                                <form method="POST" action="{{ route('menu.forceDestroy', $trashedDish->id) }}" class="d-inline" style="display:inline-block;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="border:none;background-color:transparent" title="Force Delete">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </button>
                                                </form> 
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
            {{ $dishes->links() }}
            
            
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

        <section class="food-area  popular-dishes-area padding-top-110 padding-bottom-110">
            <div class="container">
                <h2>You haven't created a restaurant yet.</h2>
                <a href="{{ route('restaurant.create') }}" class="btn btn-primary">Create Your Restaurant</a>
            </div>
        </section>
    @endif
@endsection
