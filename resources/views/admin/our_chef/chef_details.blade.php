@extends('layouts.dashboard')

@section('title')
    Ticrou ~ Add Chef Details
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Checf Details</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('chef.details.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Chef Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Designation</label>
                                            <input type="text" name="designation" class="form-control"
                                                placeholder="Designation..">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Expertise</label>
                                            <input type="text" name="expertise" class="form-control"
                                                placeholder="Strategy, Leadership..">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Experience</label>
                                            <input type="text" name="experience" class="form-control"
                                                placeholder="20 years..">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control"
                                                placeholder="email@gmail.com">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="+1 (235) 564-5648">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Facebook Url</label>
                                            <input type="text" name="fb_url" class="form-control"
                                                placeholder="www.facebook.com/ticrou">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Twitter Url</label>
                                            <input type="text" name="twtr_url" class="form-control"
                                                placeholder="www.twitter.com/ticrou">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Instagram Url</label>
                                            <input type="text" name="insta_url" class="form-control"
                                                placeholder="www.instagram.com/ticrou">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Short Description</label>
                                            <input type="text" name="short_desp" class="form-control"
                                                placeholder="Short description write here...">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Details About Chef
                                            </label>
                                            <textarea name="long_desp" id="summernote" class="form-control" cols="30" rows="10"
                                                placeholder="chef details write here...."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Chef Skills
                                            </label>
                                            <textarea name="skills" id="summernote1" class="form-control" cols="30" rows="10"
                                                placeholder="chef skills write here...."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Image
                                            </label>
                                            <input type="file" name="image" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Add Details</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
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
