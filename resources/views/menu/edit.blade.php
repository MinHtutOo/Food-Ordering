@extends('layout.form')

@section('title', 'Edit Menu')

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
    
                <h5 class="card-title text-center">Edit Your Dish</h5>
                <form action="{{ route('menu.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Dish Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $dish->name }}">
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5">{{ $dish->description }}</textarea>
                    </div>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" step="0.01" class="form-control" value="{{ $dish->price }}">
                    </div>
                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="image">Dish</label>
                            @if ($dish->image)
                                <div>
                                    <span class="text-muted">Existing Images:</span>   
                                    <div class="mb-3" style="display: inline-block; margin-right: 10px;">
                                        <a href="{{ asset('/uploads/' . $dish->image) }}" target="_blank">{{ $dish->image }}</a>
                                        <input type="hidden" name="existing_images[]" value="{{ $dish->image }}">
                                    </div>
                                </div>  
                            @endif
                        <input type="file" name="file" class="form-control">
                    </div>
                    @error('file')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $dish->category_id == $category->id ? 'selected' : '' }}>
                                    {{$category->name}}
                                </option>
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