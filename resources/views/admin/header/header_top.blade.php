@extends('layouts.dashboard')

@section('content')
<div class="header-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                @can('email.opening.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Header Top</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Email</th>
                                <th>Opening Hours</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($header_option as $serial => $h_option )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $h_option->email }}</td>
                                    <td>{{ $h_option->opening_hours }}</td>
                                    <td>
                                        <div class="list-unstyled mb0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    @can('email.opening.delete')
                                                    <a class="dropdown-item text-dark" href="{{ route('header.top.delete', $h_option->id) }}"> Delete</a>
                                                    @endcan
                                                </div>
                                            </li>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                @endcan
            </div>
            <div class="col-lg-4">
                @can('add.email.opening')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Email & Opening Hours</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('email.opening.hours') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="email@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Opening Hours</label>
                                <input type="text" name="opening_hours" class="form-control" placeholder="Open Hours: Mon - Fri 8.00 am - 6.00 pm">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
