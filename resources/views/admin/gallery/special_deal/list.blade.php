@extends('layouts.dashboard')

@section('title')
    Ticrou ~ Special Item List
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Specail Breakfast Item List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($special_deal_item as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->rel_to_pcat->p_category }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>
                                        <img width="50" src="{{ asset('uploads/gallery/special_deal/' . $item->image) }}"
                                            alt="">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp"
                                                data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12"
                                                            r="2" />
                                                        <circle fill="#000000" cx="12" cy="12"
                                                            r="2" />
                                                        <circle fill="#000000" cx="19" cy="12"
                                                            r="2" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('special.deal.item.edit', $item->id) }}">Edit</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('special.item.delete', $item->id) }}">Delete</a>
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
