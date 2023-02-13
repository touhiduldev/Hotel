@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white"></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ( as )
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="text-white"></h3>
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <input type="text" name="" class="form-control" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <input type="text" name="" class="form-control" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <input type="text" name="" class="form-control" placeholder="">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
