@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Number of Person</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('number.booking.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Number of Person</label>
                            <input type="text" name="number_person" class="form-control" placeholder="number of person">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="btn" value="1" class="btn btn-info">Add Person</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Booking Type</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('number.booking.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Booking Type</label>
                            <input type="text" name="booking_type" class="form-control" placeholder="booking type">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="btn" value="2" class="btn btn-info">Add Type</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Number of Person List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Serial</th>
                            <th>Number of Person</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($all_persons as $serial => $person)
                            <tr>
                                <td>{{ $serial+1 }}</td>
                                <td>{{ $person->number_person }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/>
                                                <circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/>
                                                <circle fill="#000000" cx="19" cy="12" r="2"/></g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('person.delete', $person->id) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Booking Type List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Serial</th>
                            <th>Booking Type</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($all_bookings as $serial => $bookings)
                            <tr>
                                <td>{{ $serial+1 }}</td>
                                <td>{{ $bookings->booking_type }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/>
                                                <circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/>
                                                <circle fill="#000000" cx="19" cy="12" r="2"/></g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('booking.delete', $bookings->id) }}">Delete</a>
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
