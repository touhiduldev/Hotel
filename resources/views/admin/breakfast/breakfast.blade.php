@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Breakfast list</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($breakfast_item as $serial => $breakfast )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $breakfast->title }}</td>
                                    <td>{{ $breakfast->sub_title }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/breakfast/'.$breakfast->image) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="list-unstyled mb0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    <a class="dropdown-item text-dark" href="{{ route('breakfast.delete', $breakfast->id) }}"> Delete</a>
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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Add Breakfast Item</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('breakfast.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="" placeholder="Title">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Subtitle</label>
                                <input type="text" name="sub_title" class="form-control" id="" placeholder="Subtitle">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="">
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
