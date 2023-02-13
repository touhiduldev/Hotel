@extends('layouts.dashboard')

@section('content')
<div class="header-content">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-8">
                @can('subcategory.list.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Subcategory List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($subcategories as $serial => $subcategory )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $subcategory->rel_to_cat->category }}</td>
                                    <td>{{ $subcategory->subcategory }}</td>
                                    <td>
                                        <div class="list-unstyled mb0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    @can('subcategory.delete')
                                                    <a class="dropdown-item text-dark" href="{{ route('subcategory.delete', $subcategory->id) }}"> Delete</a>
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
                @can('add.subcategory')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3>Add Subcategory</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subcategory.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" id="" class="form-control">
                                    <option value="">--Select Category--</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Subcategory</label>
                                <input type="text" name="subcategory" class="form-control" placeholder="">
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
