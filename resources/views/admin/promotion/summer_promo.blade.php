@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Promotion Top</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Heading</label>
                                <input type="text" name="heading" class="form-control" id="" placeholder="Heading">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="" placeholder="Subtitle">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Subtitle</label>
                                <input type="text" name="sub_title" class="form-control" id="" placeholder="Subtitle">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="desp" class="form-control" id="" cols="30" rows="3" placeholder="stat writing here..."></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Button Text</label>
                                <input type="text" name="btn_text" class="form-control" id="" placeholder="Button text">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Shape</label>
                                <input type="file" name="shape1" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Shape Image</label>
                                <input type="file" name="shape2" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="btn" value="1" class="btn btn-info">Add Promotion</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Promotion Bottom</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="" placeholder="Subtitle">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Subtitle</label>
                                <input type="text" name="sub_title" class="form-control" id="" placeholder="Subtitle">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea name="desp" class="form-control" id="" cols="30" rows="3" placeholder="stat writing here..."></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Button Text</label>
                                <input type="text" name="btn_text" class="form-control" id="" placeholder="Button text">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Shape</label>
                                <input type="file" name="shape1" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Shape Image</label>
                                <input type="file" name="shape2" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="btn" value="2" class="btn btn-info">Add Promotion</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
