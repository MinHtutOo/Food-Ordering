@extends('layout.dashboard')

@section('title', 'User Roles')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title">
                <h3>User Roles
                    <a href="{{route('role.create')}}" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
                </h3>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Role Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->name}}</td>
                                    <td class="text-right">
                                        <a href="{{route('user.permission', $role->id)}}" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-user-shield"></i></a>
                                        <a href="{{route('role.edit', $role->id)}}" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <form method="POST" action="{{route('role.destroy', $role->id)}}" style="display:inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-outline-danger btn-rounded" style="color: #888">
                                                <i class="fas fa-trash"></i> 
                                            </button>
                                        </form>
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
