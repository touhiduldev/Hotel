@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                @can('product.list.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">All Product</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($products as $serial => $product )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $product->rel_to_pcat->p_category }}</td>
                                    <td>{{ $product->rel_to_psubcat->p_subcategory }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount }}</td>
                                    <td>
                                        <img width="50" src="{{ asset('uploads/product/'.$product->image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="list-unstyled mb0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    {{-- <a class="dropdown-item text-dark" href="{{ route('banner.edit', $product->id) }}"> Edit</a> --}}
                                                    @can('product.trash')
                                                        <a class="dropdown-item text-dark" href="{{ route('product.delete', $product->id) }}"> Move to Trash</a>
                                                    @endcan
                                                </div>
                                            </li>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Trashed Product</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($trashed_products as $serial => $trashed_product )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $trashed_product->rel_to_pcat->p_category }}</td>
                                    <td>{{ $trashed_product->rel_to_psubcat->p_subcategory }}</td>
                                    <td>{{ $trashed_product->title }}</td>
                                    <td>{{ $trashed_product->price }}</td>
                                    <td>{{ $trashed_product->discount }}</td>
                                    <td>
                                        <img width="50" src="{{ asset('uploads/product/'.$trashed_product->image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="list-unstyled mb0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    @can('product.restore')
                                                        <a class="dropdown-item text-dark" href="{{ route('restore', $trashed_product->id) }}">Restore</a>
                                                    @endcan
                                                    @can('product.delete')
                                                        <a class="dropdown-item text-dark" href="{{ route('delete.trashed', $trashed_product->id) }}">Delete</a>
                                                    @endcan
                                                </div>
                                            </li>
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
