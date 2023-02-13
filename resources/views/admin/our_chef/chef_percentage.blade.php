@extends('layouts.dashboard')

@section('title')
    Ticrou ~ Chef Percentage
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Chep Percentage Add</h3>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('percentage.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Skills Title</label>
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Skills Percentage</label>
                                <input type="text" name="percentage" class="form-control" placeholder="80%, 90%, 50%">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
