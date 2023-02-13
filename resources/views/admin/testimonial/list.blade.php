@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">
                            Testimonial list
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Heading</th>
                                <th>Bg Image</th>
                                <th>Bg Shape</th>
                                <th>Man Image</th>
                                <th>Shape</th>
                                <th>Shape</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($testimonials as $serial => $test )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $test->heading }}</td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/testimonial/'.$test->bg_image) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/testimonial/'.$test->bg_shape) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/testimonial/'.$test->man_image) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/testimonial/'.$test->vegi1) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/testimonial/'.$test->vegi2) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="list-unstyled mb0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    <a class="dropdown-item text-info" href="{{ route('test.delete', $test->id) }}"> Delete</a>
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
