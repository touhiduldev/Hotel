@extends('layouts.dashboard')

@section('content')
        <div class="container">
            <div class="row">
                {{-- @if (session('deleted'))
                    <div class="alert alert-danger">{{ success('deleted') }}</div>
                @endif --}}
                <div class="col-lg-12">
                    @can('user.list.view')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 style="display: inline-block" class="mx-2">User List</h3>
                            <span style="float: right" class="mt-2 text-white mx-2">Total User: {{ $count }}</span>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($all_users as $serial => $users )
                                    <tr>
                                        <td>{{ $serial+1 }}</td>
                                        <td>{{ $users->name }}</td>
                                        <td>
                                            @if ($users->photo == null)
                                                <img src="{{ Avatar::create($users->name)->toBase64(); }}" width="50" alt="">
                                            @else
                                                <img src="{{ asset('uploads/profile') }}/{{ $users->photo }}" width="50" alt=""/>
                                            @endif
                                        </td>
                                        <td>{{ $users->email }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('user.delete')
                                                <a href="{{ route('user.delete', $users->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
@endsection
