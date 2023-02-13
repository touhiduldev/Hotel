@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @can('add.product')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="text-white">Add New Product</h3>
                        </div>
                        <div class="card-body mt-4">

                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Select Category</label>
                                            <select class="form-control" name="pcat_id" id="p_category_id">
                                                <option value="">-- Product Category --</option>
                                                @foreach ($p_categories as $p_category)
                                                    <option value="{{ $p_category->id }}">{{ $p_category->p_category }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Select Subcategory</label>
                                                <select class="form-control" name="psubcat_id" id="p_subcategory_id">
                                                    <option value="">-- Product Subcategory --</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Price</label>
                                                <input type="text" name="price" class="form-control"
                                                    placeholder="Product Price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Discount</label>
                                                <input type="text" name="discount" class="form-control"
                                                    placeholder="Product Discount">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="" class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Product Title">
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
                                                <textarea name="desp" id="summernote" class="form-control" id="" cols="30" rows="10"
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
        $('#category_id').change(function() {
            var category_id = $(this).val();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/getsubcategory',
                type: 'POST',
                data: {
                    'category_id': category_id
                },
                success: function(data) {
                    $('#subcategory_id').html(data);
                }
            });
        });
    </script>
@endsection
@section('footer_script1')
    <script>
        $('#p_category_id').change(function() {
            var p_category_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/getpsubcategory',
                type: 'POST',
                data: {
                    'p_subcategory_id': p_category_id
                },
                success: function(data) {
                    $('#p_subcategory_id').html(data);
                }
            });
        });
    </script>
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
