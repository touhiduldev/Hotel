@extends('layouts.dashboard')

@section('title')
    Add New Gallery ~ Ticrou
@endsection

@section('content')
{{-- <div class="col-xl-6 col-lg-12 m-auto">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Gallery Images</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="form-row mb-3">
                        <div class="col-sm-6">
                            <input type="text" name="sub_title" class="form-control" placeholder="Sub Title">
                        </div>
                        <div class="col-sm-6 mt-2 mt-sm-0">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-sm-12 mt-2">
                            <label for="" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header bg-info">
                    <h3>Add Food Item</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Sub Title</label>
                            <input type="text" name="sub_title" class="form-control" placeholder="Sub Title">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Sub Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-info">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
