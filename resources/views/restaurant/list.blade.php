@extends('layout.dashboard')

@section('title', 'Restaurant List')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title">
                <h3>Restaurants List</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
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
                            
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($restaurants as $restaurant)
                                        <tr>
                                            <th scope="row">{{$restaurant->id}}</th>
                                            <td>{{$restaurant->name}}</td>             
                                            <td>{{$restaurant->email}}</td>
                                            <td>{{$restaurant->address}}</td>
                                            <td>{{$restaurant->phone}}</td>
                                            <td>
                                                <a href="{{ route('restaurant.edit', $restaurant->id) }}" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                <form method="POST" action="{{ route('restaurant.destroy', $restaurant->id) }}" class="d-inline" style="display:inline-block;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-outline-danger btn-rounded">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form> 
                                                <a href="{{ route('restaurant.restore', $restaurant->id) }}" class="btn btn-outline-primary btn-rounded"><i class="fas fa-undo"></i></a>
                                            </td>
                                        </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection