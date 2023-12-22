@extends('layout.form')

@section('title', 'Create Restaurant')

@section('content') 
    <div class="card bg-light">
        <div class="card-body">
            <h5 class="card-title">Create Restaurant</h5>
            <form action="{{ route('restaurant.store') }}" method="post" enctype="multipart/form-data">
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
                    <input type="file" name="image[]" class="form-control" multiple>
                </div>
                <div class="form-group text-right">       
                    <input type="submit" class="btn btn-primary">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endSection