@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-7 m-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Testimonials</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('test.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Heading</label>
                                <input type="text" name="heading" class="form-control" id="" placeholder="Heading">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Background Image</label>
                                <input type="file" name="bg_image" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Background Shape</label>
                                <input type="file" name="bg_shape" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Man Image</label>
                                <input type="file" name="man_image" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Vegitable</label>
                                <input type="file" name="vegi1" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Vegitable</label>
                                <input type="file" name="vegi2" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="btn" value="1" class="btn btn-info">Add Testimonials</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
