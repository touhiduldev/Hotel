@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Add Logo</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('logo.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" class="form-control" name="logo_id" value="{{ $logos->id }}">
                            <div class="mb-3">
                                <label for="" class="form-label">Logo</label>
                                <input type="file" name="logo" class="form-control" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <img width="80" class="mt-2" src="{{ asset('uploads/logos/'.$logos->logo) }}" id="blah" alt="">
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
@endsection
