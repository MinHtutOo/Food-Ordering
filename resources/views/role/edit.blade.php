@extends('layout.form')

@section('title', 'Edit Role')

@section('content')
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="{!!asset('/images/logo/logo2.png')!!}" alt="">
                    </div>
                    <h6 class="mb-4 text-muted">Edit a Role</h6>
                   
                    <form action="{{route('role.update', $role->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$role->name}}">
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Edit Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection