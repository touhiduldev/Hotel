@extends('layouts.dashboard')
@section('title')
    Ticrou ~ Role List
@endsection

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Roles</a></li>
        </ol>
    </ol>
</div>
<!-- row -->


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Role List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display min-w850">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Roles Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $sirial => $role )
                            <tr>
                                <td>{{ $sirial+1 }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
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
@endsection

