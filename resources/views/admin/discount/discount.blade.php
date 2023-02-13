@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Discount List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Heading</th>
                                <th>Button Text</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($all_discount as $serial => $discount)
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $discount->title }}</td>
                                    <td>{{ $discount->heading }}</td>
                                    <td>{{ $discount->btn_text }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('delete.discount', $discount->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                        {{-- <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Discount</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('discount.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="" placeholder="title">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Heading</label>
                                <input type="text" name="heading" class="form-control" id="" placeholder="heading">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Button Text</label>
                                <input type="text" name="btn_text" class="form-control" id="" placeholder="button text">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Add Discount</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
