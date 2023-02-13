@extends('layouts.dashboard')

@section('title')
    Ticrou ~ Assign Role
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Assign Role</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4>User List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Serial</th>
                                <th>User Name</th>
                                <th>Role Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($users as $serial => $user)
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        @forelse ($user->getRoleNames() as $role)
                                            <span class="badge badge-pill badge-info">{{ $role }}</span>
                                        @empty
                                            <span class="badge badge-pill badge-warning">Not Assign</span>
                                        @endforelse
                                    </td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="{{ route('remove.assign', $user->id) }}" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Assign Role</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('assign.role.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Name</label>
                                <select name="user_id" id="" class="form-control">
                                    <option value="">--Select User--</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role Name</label>
                                <select name="role_id" id="" class="form-control">
                                    <option value="">--Select Role--</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Assign Role</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
