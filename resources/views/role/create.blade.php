@extends('layout.form')

@section('title', 'Role Create')

@section('content')
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="{!!asset('/images/logo/logo2.png')!!}" alt="">
                    </div>
                    <h6 class="mb-4 text-muted">Add a Role</h6>
                   
                    <form action="{{route('role.create')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Add Role" name="name">
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Add Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection