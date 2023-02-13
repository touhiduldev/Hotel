@extends('layouts.dashboard')
@section('title')
    Ticrou ~ Banner Section
@endsection

@section('content')
<div class="header-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                @can('banner.list.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Banner List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Button Text</th>
                                <th>Banner</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($banners as $serial => $banner )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        {{ substr($banner->desp, 0, 30) }}
                                    </td>
                                    <td>{{ $banner->btn_text }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/banner/'.$banner->banner_img) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/>
                                                    <circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/>
                                                    <circle fill="#000000" cx="19" cy="12" r="2"/></g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                @can('banner.edit')
                                                <a class="dropdown-item" href="{{ route('banner.edit', $banner->id) }}">Edit</a>
                                                @endcan
                                                @can('banner.delete')
                                                <a class="dropdown-item" href="{{ route('banner.delete', $banner->id) }}">Delete</a>
                                                @endcan
                                            </div>
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
                @can('add.banner')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Add Banner</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Description</label>
                                <textarea name="desp" cols="46" rows="3" placeholder="start writing here..."></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Button Text</label>
                                <input type="text" name="btn_text" class="form-control" placeholder="button text">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Banner</label>
                                <input type="file" name="banner_img" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Add Banner</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endcan
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Shape List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Shape</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($banner_shape as $serial => $shape )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/banner/'.$shape->banner_shape) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/>
                                                    <circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/>
                                                    <circle fill="#000000" cx="19" cy="12" r="2"/></g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('shape.delete', $shape->id) }}">Delete</a>
                                            </div>
                                        </div>
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
                        <h3>Banner Shape</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('shape.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Banner Shape</label>
                                <input type="file" name="banner_shape" class="form-control">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-info">Add Shape</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
