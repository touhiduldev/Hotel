@extends('layouts.dashboard')

@section('title')
    Ticrou ~ Add Special Deal Items
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @can('add.product')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="text-white">Add Special Deal Items</h3>
                        </div>
                        <div class="card-body mt-4">

                            <form action="{{ route('special.items.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Product Title">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="" class="form-label">Select Category</label>
                                            <select class="form-control" name="pcat_id" id="p_category_id">
                                                <option value="">-- Product Category --</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->p_category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Price</label>
                                                <input type="text" name="price" class="form-control"
                                                    placeholder="Product Price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Short Description</label>
                                                <textarea name="short_desp" id="summernote1" class="form-control" id="" cols="30" rows="5"
                                                    placeholder="Start writing here..."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Description</label>
                                                <textarea name="long_desp" id="summernote" class="form-control" id="" cols="30" rows="10"
                                                    placeholder="Start writing here..."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Product Image</label>
                                                <input type="file" name="image" class="form-control"
                                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <img width="100" class="mt-2" src="" id="blah" alt="">
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
    <script>
        $(document).ready(function() {
            $('#summernote1').summernote();
        });
    </script>
@endsection
