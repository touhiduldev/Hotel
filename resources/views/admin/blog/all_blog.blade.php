@extends('layouts.dashboard')
@section('title')
    Ticrou ~ All Blogs
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
                @can('view.blog.list')
                    <div class="card">
                        <div class="card-header">
                            <h3>All Blogs</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Day</th>
                                    <th>Month</th>
                                    <th>Title</th>
                                    <th>Short Text</th>
                                    <th>Short Image</th>
                                    <th>Long Image</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($all_blogs as $serial => $blogs )
                                    <tr>
                                        <td>{{ $serial+1 }}</td>
                                        <td>{{ $blogs->rel_to_blog_cate->blog_category }}</td>
                                        <td>{{ $blogs->today_date }}</td>
                                        <td>{{ $blogs->month_name }}</td>
                                        <td>{{ $blogs->blog_title }}</td>
                                        <td>{{ $blogs->short_text }}</td>
                                        <td>
                                            <img width="70" src="{{ asset('uploads/blog/'.$blogs->short_img) }}" alt="">
                                        </td>
                                        <td>
                                            <img width="70" src="{{ asset('uploads/blog/'.$blogs->long_img) }}" alt="">
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    @can('edit.blog')

                                                    <a class="dropdown-item" href="{{ route('blog.edit', $blogs->id) }}">Edit</a>
                                                    @endcan
                                                    @can('delete.blog')
                                                    <a class="dropdown-item" href="{{ route('blog.delete', $blogs->id) }}">Delete</a>
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
        </div>
    </div>
@endsection
