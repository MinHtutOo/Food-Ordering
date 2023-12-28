@extends('layout.form')

@section('title', 'Edit Category')

@section('content') 
    <div class="container mt-5 p-5">
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
    
                <h5 class="card-title mb-5 text-center">Edit Category</h5>
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                    </div>
                    <div class="form-group">       
                        <input type="submit" class="btn btn-primary">
                        <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection