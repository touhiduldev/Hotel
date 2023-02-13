@extends('layouts.dashboard')
@section('title')
    Ticrou ~ Add New Blog
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @can('add.blog')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="text-white">Add New Blog</h3>
                        </div>
                        <div class="card-body mt-4">

                            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="" class="form-label">Select Category</label>
                                            <select class="form-control" name="blog_category_id">
                                                <option value="">-- Product Category --</option>
                                                @foreach ($blog_categories as $blog_category)
                                                    <option value="{{ $blog_category->id }}">{{ $blog_category->blog_category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Today's Date</label>
                                                <input type="text" name="today_date" class="form-control" placeholder="today's date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Month Name</label>
                                                <input type="text" name="month_name" class="form-control" placeholder="month name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Blog Title</label>
                                                <input type="text" name="blog_title" class="form-control" placeholder="blog title">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Short Text</label>
                                                <input type="text" name="short_text" class="form-control" placeholder="short text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Description</label>
                                                <textarea name="desp" id="summernote" class="form-control" id="" cols="30" rows="10" placeholder="Start writing here..."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Blog Image</label>
                                                <input type="file" name="short_img" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <img width="100" class="mt-2" src="" id="blah" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Blog Big Image</label>
                                                <input type="file" name="long_img" class="form-control" onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])">
                                                <img width="100" class="mt-2" src="" id="blah1" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info">Publish</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
