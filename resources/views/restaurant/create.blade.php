@extends('layout.form')

@section('title', 'Create Restaurant')

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
            <form action="{{ route('restaurant.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                </div>
                <div class="row mb-3">
                    <div class="col">       
                        <label for="address">Address</label>
                        <input type="text" name="address" placeholder="Address" class="form-control">
                    </div>
                    <div class="col">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" placeholder="Phone" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="opening_hour">Opening Hour</label>
                        <input type="time" name="opening_hour" placeholder="Opening Hour" class="form-control">
                    </div>
                    <div class="col">
                        <label for="closing_hour">Closing Hour</label>
                        <input type="time" name="closing_hour" placeholder="Closing Hour" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Restaurant Image</label>
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