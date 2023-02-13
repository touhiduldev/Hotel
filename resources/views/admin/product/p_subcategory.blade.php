@extends('layouts.dashboard')

@section('content')
    <div class="header-content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-8">
                    @can('product.subcategory.list.view')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Product Subcategory List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Serial</th>
                                    <th>Product Category</th>
                                    <th>Product Subcategory</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($p_subcategories as $serial => $p_subcategoy )
                                    <tr>
                                        <td>{{ $serial+1 }}</td>
                                        <td>{{ $p_subcategoy->rel_to_pcategory->p_category }}</td>
                                        <td>{{ $p_subcategoy->p_subcategory }}</td>
                                        <td>
                                            <div class="list-unstyled mb0">
                                                <li class="dropdown dropdown-primary list-inline-item">
                                                    <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                        @can('product.subcategory.delete')
                                                        <a class="dropdown-item text-dark" href="{{ route('p.subcategory.delete', $p_subcategoy->id) }}"> Delete</a>
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
                <div class="col-lg-4">
                    @can('add.product.subcategory')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Add Product Subcategory</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('p.subcategory.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Category</label>
                                    <select name="p_category" id="" class="form-control">
                                        <option value="">--Select Category--</option>
                                        @foreach ($p_categories as $p_category)
                                            <option value="{{ $p_category->id }}">{{ $p_category->p_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Subcategory</label>
                                    <input type="text" class="form-control" name="p_subcategory" placeholder="Product subcategory">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Add Subcategory</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
