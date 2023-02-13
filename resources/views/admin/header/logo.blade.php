@extends('layouts.dashboard')

@section('content')
<div class="header-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                @can('logo.list.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Logo List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($logos as $serial => $logo )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/logos/'.$logo->logo) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="list-unstyled mb0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    {{-- @can('logo.edit') --}}
                                                    <a class="dropdown-item text-dark" href="{{ route('logo.edit', $logo->id) }}"> Edit</a>
                                                    {{-- @endcan --}}
                                                    @can('logo.delete')
                                                    <a class="dropdown-item text-dark" href="{{ route('logo.delete', $logo->id) }}"> Delete</a>
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
                @can('add.logo')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Add Logo</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('logo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Add Logo</button>
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
