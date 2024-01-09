@extends('layout.master')

@section('title', 'Create Restaurant')

@section('content') 
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
                    <h2 class="page-title">Create Restaurant</h2>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a> / </li>
                        <li class="text-white">My Restaurant</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="card bg-light">
            <div class="card-body p-5">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{ route('restaurant.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
        
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="row mb-3">
                        <div class="col">       
                            <label for="address">Address</label>
                            <input type="text" name="address" placeholder="Address" class="form-control">
                        </div>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
    
                        <div class="col">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control">
                        </div>
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="row mb-3">
                        <div class="col">
                            <label for="opening_hour">Opening Hour</label>
                            <input type="time" name="opening_hour" placeholder="Opening Hour" class="form-control">
                        </div>
                        @error('opening_hour')  
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
    
                        <div class="col">
                            <label for="closing_hour">Closing Hour</label>
                            <input type="time" name="closing_hour" placeholder="Closing Hour" class="form-control">
                        </div>
                        @error('closing_hour')  
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
    
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Restaurant Image</label>
                        <input type="file" name="file[]" class="form-control" multiple>
                    </div>
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
    
                    <div class="form-group d-flex justify-content-end">       
                        <input type="submit" class="btn btn-primary me-2">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection