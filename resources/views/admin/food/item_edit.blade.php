@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Update Food Item</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('item.update') }}" method="POST">
                            @csrf

                            <input type="hidden" name="item_id" value="{{ $all_food_items->id }}" id="">
                            <div class="mb-3">
                                <label for="" class="form-label">Food Category</label>
                                <select name="food_category" id="" class="form-control">
                                    @foreach ($all_categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $all_food_items->food_cat_id?'selected':'' }}>{{ $category->food_category }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Food Item</label>
                                <input type="text" class="form-control" name="food_item" value="{{ $all_food_items->food_item }}" placeholder="food item">
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
@endsection
