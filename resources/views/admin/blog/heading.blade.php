@extends('layouts.dashboard')
@section('title')
    Ticrou ~ Blog Heading Section
@endsection

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Blog Category</a></li>
    </ol>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7">
            @can('view.blog.heading')
            <div class="card">
                <div class="card-header">
                    <h3>Heading Title List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Serial</th>
                            <th>Title</th>
                            <th>Heading</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($heading_title as $serial => $heading)
                        <tr>
                            <td>{{ $serial+1 }}</td>
                            <td>{{ $heading->title }}</td>
                            <td>{{ $heading->heading }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        @can('delete.blog.heading')
                                        <a class="dropdown-item" href="{{ route('head.title.delete', $heading->id) }}">Delete</a>
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
        <div class="col-lg-5">
            @can('add.blog.heading')
            <div class="card">
                <div class="card-header">
                    <h3>Heading Title</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('heading.title.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" placeholder="heading">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                    </form>
                </div>
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection
