@extends('layouts.dashboard')

@section('title')
    Ticrou ~ Update Special Deal Breakfast Item
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @can('add.product')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="text-white">Update Special Deal Breakfast Item</h3>
                        </div>
                        <div class="card-body mt-4">

                            <form action="{{ route('special.item.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <input type="hidden" name="special_id" value="{{ $all_special_items->id }}" id="">

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Product Title" value="{{ $all_special_items->title }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="" class="form-label">Select Category</label>
                                            <select class="form-control" name="pcat_id" id="p_category_id">
                                                <option value="">-- Product Category --</option>
                                                <option value="{{ $all_special_items->id }}" selected>
                                                    {{ $all_special_items->rel_to_pcat->p_category }}</option>
                                                @foreach ($p_categories as $p_category)
                                                    <option value="{{ $p_category->id }}">{{ $p_category->p_category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Price</label>
                                                <input type="text" name="price" class="form-control"
                                                    placeholder="Product Price" value="{{ $all_special_items->price }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Short Description</label>
                                                <textarea name="short_desp" id="summernote1" class="form-control" id="" cols="30" rows="5"
                                                    placeholder="Start writing here...">{{ $all_special_items->short_desp }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Description</label>
                                                <textarea name="long_desp" id="summernote" class="form-control" id="" cols="30" rows="10"
                                                    placeholder="Start writing here...">{{ $all_special_items->long_desp }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Product Image</label>
                                                <input type="file" name="image" class="form-control"
                                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                <img width="100" class="mt-2"
                                                    src="{{ asset('uploads/gallery/special_deal/' . $all_special_items->image) }}"
                                                    id="blah" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info">Update</button>
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
