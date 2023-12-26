@extends('layout.form')

@section('title', 'Edit Restaurant')

@section('content') 
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

            <h5 class="card-title">Create Restaurant</h5>
            <form action="{{ route('restaurant.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $restaurant->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email Address" class="form-control" value="{{ $restaurant->email }}">
                </div>
                <div class="row mb-3">
                    <div class="col">       
                        <label for="address">Address</label>
                        <input type="text" name="address" placeholder="Address" class="form-control" value="{{ $restaurant->address }}">
                    </div>
                    <div class="col">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{ $restaurant->phone }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="opening_hour">Opening Hour</label>
                        <input type="time" name="opening_hour" placeholder="Opening Hour" class="form-control" value="{{ $restaurant->opening_hour }}">
                    </div>
                    <div class="col">
                        <label for="closing_hour">Closing Hour</label>
                        <input type="time" name="closing_hour" placeholder="Closing Hour" class="form-control" value="{{ $restaurant->closing_hour }}">
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="image">Restaurant Image</label>
                    @if ($restaurant->image)
                        @foreach (unserialize($restaurant->image) as $image)
                            <div>
                                <img src="{{ asset('/uploads/' . $image) }}" alt="Restaurant Image" style="max-width: 200px; max-height: 200px;">
                                <input type="hidden" name="existing_images[]" value="{{ $image }}">
                            </div>
                        @endforeach
                    @endif
                    <input type="file" name="file[]" class="form-control">
                </div> --}}
                <div class="form-group">
                    <label for="image">Restaurant Image</label>
                    @if ($restaurant->image)
                        <div>
                            <span class="text-muted">Existing Images:</span>   
                            @foreach (unserialize($restaurant->image) as $image)
                                <div class="mb-3" style="display: inline-block; margin-right: 10px;">
                                    <a href="{{ asset('/uploads/' . $image) }}" target="_blank">{{ $image }}</a>
                                    <input type="hidden" name="existing_images[]" value="{{ $image }}">
                                </div>
                            @endforeach
                        </div>  
                    @endif
                    <input type="file" name="file[]" class="form-control" multiple>
                </div>
                
                <div class="form-group text-right">       
                    <input type="submit" class="btn btn-primary">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endSection