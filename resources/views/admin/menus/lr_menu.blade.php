@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                @can('add.weekly.left.menu')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Left Menu</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('lrmenu.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Menu title">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Short Description</label>
                                <textarea name="short_desp" id="" class="form-control" cols="30" rows="3" placeholder="Short Description"></textarea>
                            </div>

                            <div>
                                <label for="" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Price">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Menu Image</label>
                                <input type="file" name="menu_img" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="btn" value="1" class="btn btn-info">Add Menu</button>
                            </div>

                        </form>

                    </div>
                </div>
                @endcan
            </div>

            <div class="col-lg-6">
                @can('add.weekly.right.menu')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Right Menu</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('lrmenu.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Menu title">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Short Description</label>
                                <textarea name="short_desp" id="" class="form-control" cols="30" rows="3" placeholder="Short Description"></textarea>
                            </div>

                            <div>
                                <label for="" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Price">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Menu Image</label>
                                <input type="file" name="menu_img" class="form-control" id="">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="btn" value="2" class="btn btn-info">Add Menu</button>
                            </div>

                        </form>

                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
@endsection
