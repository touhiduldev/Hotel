@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Food Menu List
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Food Category</th>
                                <th>Food Item</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($food_menus as $serial =>$food_menu )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $food_menu->rel_to_food_cat->food_category }}</td>
                                    <td>{{ $food_menu->rel_to_food_item->food_item }}</td>
                                    <td>{{ $food_menu->price }}</td>
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
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
