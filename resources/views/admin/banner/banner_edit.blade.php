@extends('layouts.dashboard')

@section('content')
<div class="header-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Edit Banner</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="banner_id" class="form-control" value="{{ $banners->id }}">
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="title" value="{{ $banners->title }}">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Description</label>
                                <textarea name="desp" cols="66" rows="3">  {{ $banners->desp }}</textarea>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Button Text</label>
                                <input type="text" name="btn_text" class="form-control" placeholder="button text" value="{{ $banners->btn_text }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Banner</label>
                                <input type="file" name="banner_img" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <img width="70" class="mt-2" src="{{ asset('uploads/banner/'.$banners->banner_img) }}" id="blah" alt="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
