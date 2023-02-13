@extends('layouts.dashboard')
@section('title')
    Ticrou ~ Role Creation
@endsection

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Role</a></li>
    </ol>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            @can('role.view')
            <div class="card">
                <div class="card-header">
                    <h4>Role & Permissions List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @foreach ($role->getPermissionNames() as $permission)
                                        <span class="badge badge-pill badge-info my-1 text-black" style="opacity: 60%" >{{ $permission }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        @can('role.edit')

                                        <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                        @endcan
                                        @can('role.delete')
                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        @endcan
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            @endcan
        </div>
        <div class="col-lg-3">

{{-- PERMISSIONS ADDED FORM START --}}

            {{-- <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Permissions</h4>
                    @include('admin.backend.error_messages.messages')

                    <form action="{{ route('permissions.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Permission Name</label>
                            <input type="text" name="permission_name" class="form-control" placeholder="Please enter a permission name">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                    </form>
                </div>
            </div> --}}

{{-- PERMISSIONS ADDED FORM END --}}
            @can('role.create')
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Create Role</h4>
                    @include('admin.backend.error_messages.messages')

                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role Name</label>
                            <input type="text" name="role_name" class="form-control" placeholder="Please enter a role name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Permissions</label>
                            <div class="form-check">
                                <input type="checkbox" name="permissions[]" class="form-check-input" id="PermissionCheckAll" value="1" >
                                <label class="form-check-label" for="PermissionCheckAll">All</label>
                            </div>
                            <hr>
                            @foreach ($permissions as $permission)
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input type="checkbox" name="permissions[]" class="form-check-input" id="checkPermission" value="{{ $permission->id }}">
                                            <label class="form-check-label" for="checkPermission">{{ $permission->name }}</label>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                    </form>
                </div>
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection
@section('footer_script')
        @include('admin.backend.role.scripts');
@endsection
