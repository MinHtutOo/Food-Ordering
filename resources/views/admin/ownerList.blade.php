@extends('layout.dashboard')

@section('title', 'Owners List')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title">
                <h3>Owner List
                    <a href="{{route('owner.create')}}" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
                </h3>
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
                                        <th scope="col">Restaurant</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($owners as $owner)
                                        <tr>
                                            <th scope="row">{{$owner->id}}</th>
                                            <td>{{$owner->name}}</td>
                                            <td>{{$owner->email}}</td>
                                            @if ($owner->restaurant)
                                                <td>{{$owner->restaurant->name}}</td>
                                                <td>{{$owner->restaurant->phone}}</td>
                                                <td>{{$owner->restaurant->address}}</td>
                                            @else
                                                <td colspan="3"><b>No restaurant associated with this owner</b></td>
                                            @endif               
                                            <td>
                                                <a href="{{route('owner.edit', $owner->id)}}" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                <form method="POST" action="{{route('owner.destroy', $owner->id)}}" style="display:inline-block;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-outline-danger btn-rounded" style="color: #888">
                                                        <i class="fas fa-trash"></i> 
                                                    </button>
                                                </form>
                                                <a href="{{route('owner.restore', $owner->id)}}" class="btn btn-outline-primary btn-rounded"><i class="fas fa-undo"></i></a>
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
    
