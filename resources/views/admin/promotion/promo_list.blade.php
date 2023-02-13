@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Promotion Top List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Heading</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Button Text</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Shape</th>
                                <th>Shape2</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($promo_tops as $serial => $promo_top)
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $promo_top->heading }}</td>
                                    <td>{{ $promo_top->title }}</td>
                                    <td>{{ $promo_top->sub_title }}</td>
                                    <td>{{ $promo_top->desp }}</td>
                                    <td>{{ $promo_top->btn_text }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/promotion/promo_top/'.$promo_top->image) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/promotion/promo_top/'.$promo_top->shape1) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/promotion/promo_top/'.$promo_top->shape2) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('promo.top.dlt', $promo_top->id) }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Promotion Bottom List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Button Text</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Shape</th>
                                <th>Shape2</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($promo_bottoms as $serial => $promo_bottom)
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $promo_bottom->title }}</td>
                                    <td>{{ $promo_bottom->sub_title }}</td>
                                    <td>{{ $promo_bottom->desp }}</td>
                                    <td>{{ $promo_bottom->btn_text }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/promotion/promo_bottom/'.$promo_bottom->image) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/promotion/promo_bottom/'.$promo_bottom->shape1) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/promotion/promo_bottom/'.$promo_bottom->shape2) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('promo.bottom.dlt', $promo_bottom->id) }}">Delete</a>
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
