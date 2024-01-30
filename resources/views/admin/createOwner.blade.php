@extends('layout.form')

@section('title', 'Admin Login')

@section('content')
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="{!!asset('/images/logo/logo3.png')!!}" alt="">
                    </div>
                    <h6 class="mb-4 text-muted">Create Owner</h6>
                   
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                        </div>
                        @error('name')
                            <div class="alert">{{ $message }}</div>
                        @enderror
                        
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                        </div>
                        @error('email')
                            <div class="alert">{{ $message }}</div>
                        @enderror

                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Phone(Optional)" name="phone" value="{{old('phone')}}">
                            </div>     
                            @error('phone')
                                <div class="alert">{{ $message }}</div>
                            @enderror   

                            <div class="col">
                                <input type="text" class="form-control" placeholder="Address(Optional)" name="address" value="{{old('address')}}">
                            </div>
                            @error('address')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                 value="{{old('password_confirmation')}}">    
                            </div>
                            @error('password')
                                <div class="alert">{{ $message }}</div>
                            @enderror
    
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation"
                                value="{{old('password_confirmation')}}">
                            </div>  
                            @error('password_confirmation')
                                <div class="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    
                        <div class="row mb-3 no-gutters justify-content-end">
                            <button class="btn btn-primary shadow-2 mb-4">Create</button>
                            <a href="{{route('owner.list')}}" class="btn btn-secondary shadow-2 mb-4 text-white" style="margin-right: 0px!important">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
    
    