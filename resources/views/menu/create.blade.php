@extends('layout.form')

@section('title', 'Create Menu')

@section('content') 
    <div class="container p-5">
        <div class="card bg-light">
            <div class="card-body">
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
    
                <h5 class="card-title text-center">Create Your Dish</h5>
                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Dish Name</label>
                        <input type="text" name="name" placeholder="Enter Dish Name" class="form-control">
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                    </div>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" step="0.01" placeholder="Enter Price" class="form-control">
                    </div>
                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="image">Dish</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    @error('file')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group text-right">       
                        <input type="submit" class="btn btn-primary">
                        <a href="{{ route('myRestaurant') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endSection