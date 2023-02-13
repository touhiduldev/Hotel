@extends('layouts.dashboard')

@section('content')
    <div class="header-content">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8">
                    @can('category.list.view')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Category List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Serial</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($categories as $serial => $category )
                                    <tr>
                                        <td>{{ $serial+1 }}</td>
                                        <td>{{ $category->category }}</td>
                                        <td>
                                            <div class="list-unstyled mb0">
                                                <li class="dropdown dropdown-primary list-inline-item">
                                                    <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                        @can('category.delete')
                                                        <a class="dropdown-item text-dark" href="{{ route('category.delete', $category->id) }}"> Delete</a>
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
                    @can('add.category')
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3>Add Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Category</label>
                                    <input type="text" class="form-control" name="category" placeholder="category">
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
