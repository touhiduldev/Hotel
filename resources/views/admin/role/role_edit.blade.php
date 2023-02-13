@extends('layouts.dashboard')
@section('title')
    Ticrou ~ Role Edit
@endsection

@section('content')
<div class="col-lg-12 col-ml-12">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('role.datatable') }}">Roles</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Role Edit</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Role Edit - ({{ $role->name }})</h4>

                    {{-- @include('admin.backend.error_messages.messages') --}}

                    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role Name</label>
                            <input type="text" name="role_name" class="form-control" value="{{ $role->name }}" placeholder="Please enter a role name">
                        </div>
                        <div class="from-group">
                            <label for="" class="form-label">Permissions</label>

                        <div class="form-check">
                            <input type="checkbox" name="permissions[]" class="form-check-input" id="PermissionCheckAll" value="1" {{ App\Models\User::roleHasPermissions($role, $permissions)?'checked' : '' }}>
                            <label class="form-check-label" for="PermissionCheckAll">All</label>
                        </div>
                        <hr>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($permission_groups as $group)
                            <div class="row">
                                @php
                                    $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                    $j = 1;
                                @endphp
                                <div class="col-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="permissions[]" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)" {{ App\Models\User::roleHasPermissions($role, $permissions)?'checked' : '' }}>
                                        <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                                    </div>
                                </div>

                                <div class="col-9 role-{{ $i }}-management-checkbox">
                                    @foreach ($permissions as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" name="permissions[]" {{ $role->hasPermissionTo($permission->name)? 'checked': '' }} class="form-check-input" onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                            <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                        </div>
                                        @php
                                            $j++;
                                        @endphp
                                    @endforeach
                                    <br>
                                </div>

                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach

                    </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_script')
    @include('admin.backend.role.scripts');
@endsection
