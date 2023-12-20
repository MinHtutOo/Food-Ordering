@extends('layout.dashboard')

@section('title', 'User Permissions')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title">
                <h3>User Permissions
                    <a href="{{route('role.index')}}" class="btn btn-sm btn-outline-info float-right"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                </h3>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <form action="{{route('user.assignPermission', $data['role']->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        @foreach($data['groupedPermissions'] as $groupName => $permissions)
                        <div class="form-group">
                            <label for="email" class="text-uppercase">{{$groupName}} permission</label>
                            @foreach($permissions as $permission)
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="{{$permission}}">
                                <label class="custom-control-label" for="{{$permission}}">{{str_replace('_', ' ', $permission)}}</label>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </form>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Save</button>
                    <a href="{{route('role.index')}}" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection       