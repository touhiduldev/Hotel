@extends('layouts.dashboard')

@section('content')
    <div class="header-content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Food Item List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Serial</th>
                                    <th>Menu Category</th>
                                    <th>Food Item</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($all_food_items as $serial => $food_item )
                                    <tr>
                                        <td>{{ $serial+1 }}</td>
                                        <td>{{ $food_item->rel_to_food_cat->food_category }}</td>
                                        <td>{{ $food_item->food_item }}</td>
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
                                                    <a class="dropdown-item" href="{{ route('item.edit', $food_item->id) }}">Edit</a>
                                                    <a class="dropdown-item" href="{{ route('item.delete', $food_item->id) }}">Delete</a>
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
                            <h3>Add Food Item</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('item.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="" class="form-label">Food Category</label>
                                    <select name="food_category" id="" class="form-control">
                                        @foreach ($all_categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->food_category }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Food Item</label>
                                    <input type="text" class="form-control" name="food_item" placeholder="food item">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Add Item</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
