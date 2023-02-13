@extends('layouts.dashboard')

@section('content')
    <div class="header-content">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8">
                    @can('product.category.list.view')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Product Category List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Serial</th>
                                    <th>Product Category</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($p_categories as $serial => $p_category )
                                    <tr>
                                        <td>{{ $serial+1 }}</td>
                                        <td>{{ $p_category->p_category }}</td>
                                        <td>
                                            <div class="list-unstyled mb0">
                                                <li class="dropdown dropdown-primary list-inline-item">
                                                    <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                        @can('product.category.delete')
                                                        <a class="dropdown-item text-dark" href="{{ route('p.category.delete', $p_category->id) }}"> Delete</a>
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
                    @can('add.product.category')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Add Product Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('p.category.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Category</label>
                                    <input type="text" class="form-control" name="p_category" placeholder="Product category">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Add Category</button>
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
