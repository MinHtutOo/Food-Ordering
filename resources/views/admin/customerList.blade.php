@extends('layout.dashboard')

@section('title', 'Customers List')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title">
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
                <h3>Customers List</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <th scope="row">{{$customer->id}}</th>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->phone}}</td>
                                            <td>{{$customer->address}}</td>
                                            <td>
                                                <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                <form method="POST" action="{{route('customer.destroy', $customer->id)}}" style="display:inline-block;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-outline-danger btn-rounded" style="color: #888">
                                                        <i class="fas fa-trash"></i> 
                                                    </button>
                                                </form>
                                                <a href="{{route('customer.restore', $customer->id)}}" class="btn btn-outline-primary btn-rounded"><i class="fas fa-undo"></i></a>
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

            
        