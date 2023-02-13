@extends('layouts.dashboard')

@section('title')
    Ticrou ~ All Chef's
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Ticrou's All Chef</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($all_chef as $serial => $chef)
                                <tr>
                                    <td>{{ $serial + 1 }}</td>
                                    <td>{{ $chef->name }}</td>
                                    <td>{{ $chef->email }}</td>
                                    <td>{{ $chef->phone }}</td>
                                    <td>{{ $chef->designation }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/chef/' . $chef->image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp"
                                                data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12"
                                                            r="2" />
                                                        <circle fill="#000000" cx="12" cy="12"
                                                            r="2" />
                                                        <circle fill="#000000" cx="19" cy="12"
                                                            r="2" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('chef.delete', $chef->id) }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
