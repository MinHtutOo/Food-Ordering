@extends('layout.dashboard')

@section('title', 'Categories')

@section('content')
    <div class="content">
        <div class="container-fluid">
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
            <div class="page-title">
                <h3>Categories
                    <a href="{{route('category.create')}}" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
                </h3>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <form method="POST" action="{{route('category.destroy', $category->id)}}" style="display:inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-outline-danger btn-rounded" style="color: #888">
                                                <i class="fas fa-trash"></i> 
                                            </button>
                                        </form>
                                        <a href="{{route('category.restore', $category->id)}}" class="btn btn-outline-primary btn-rounded"><i class="fas fa-undo"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
