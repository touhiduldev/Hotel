@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Right Menu</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('rmenu.update') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="hidden" name="rmenu_id" id="" value="{{ $right_menus->id }}">
                                <input type="text" class="form-control" name="title" placeholder="Menu title" value="{{ $right_menus->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Short Description</label>
                                <textarea name="short_desp" id="" class="form-control" cols="30" rows="3" placeholder="Short Description">{{ $right_menus->desp }}</textarea>
                            </div>
                            <div>
                                <label for="" class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="text" class="form-control" name="price" value="{{ $right_menus->price }}" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
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
