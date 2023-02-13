@extends('layouts.dashboard')

@section('content')
    <div class="header-content">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Food Category List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Serial</th>
                                    <th>Food Menu Category</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($all_categories as $serial => $all_category )
                                    <tr>
                                        <td>{{ $serial+1 }}</td>
                                        <td>{{ $all_category->food_category }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/>
                                                        <circle fill="#000000" cx="19" cy="12" r="2"/></g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Add Food Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('food.category.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Food Category</label>
                                    <input type="text" class="form-control" name="food_category" placeholder="food category">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Add Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
