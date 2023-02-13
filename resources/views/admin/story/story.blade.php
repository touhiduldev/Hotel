@extends('layouts.dashboard')

@section('content')
<div class="header-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 m-auto">
                @can('add.story')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Add Story</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('story.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Sub Title</label>
                                <input type="text" name="sub_title" class="form-control" placeholder="sub title">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Description</label>
                                <textarea name="desp" cols="75" rows="4" placeholder=" start writing here..."></textarea>
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Staff</label>
                                <input type="file" name="staff" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Vegetable</label>
                                <input type="file" name="vegetable" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Bread</label>
                                <input type="file" name="bread" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Shape</label>
                                <input type="file" name="shape" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Signature</label>
                                <input type="file" name="signature" class="form-control">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Option</label>
                                    <input type="text" class="form-control" name="option" placeholder="Express Delivery">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Option</label>
                                    <input type="text" class="form-control" name="option1" placeholder="High Quality Food">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Option 2</label>
                                    <input type="text" class="form-control" name="option2" placeholder="Inspiring Recipes">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Option</label>
                                    <input type="text" class="form-control" name="option3" placeholder="Veteran Staff">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Option</label>
                                    <input type="text" class="form-control" name="option4" placeholder="Salutary Meals">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Option</label>
                                    <input type="text" class="form-control" name="option5" placeholder="High Quality Food">
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Add Story</button>
                            </div>
                        </form>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
