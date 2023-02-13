@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mt-5">
                @can('left.menu.list.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Left Menus</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($left_menus as $serial => $l_menu )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>
                                        {{ substr($l_menu->title, 0, 25) }}
                                    </td>
                                    <td>
                                        {{ substr($l_menu->desp, 0, 30) }}
                                    </td>
                                    <td>${{ $l_menu->price }}</td>
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
                                                @can('left.menu.edit')
                                                <a class="dropdown-item" href="{{ route('lmenu.edit', $l_menu->id) }}">Edit</a>
                                                @endcan
                                                @can('left.menu.delete')
                                                <a class="dropdown-item" href="{{ route('lmenu.delete', $l_menu->id) }}">Delete</a>
                                                @endcan
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                @endcan
            </div>

            <div class="col-lg-6 mt-5">
                @can('right.menu.list.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Right Menus</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($right_menus as $serial => $r_menu )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>
                                        {{ substr($r_menu->title, 0, 25) }}
                                    </td>
                                    <td>
                                        {{ substr($r_menu->desp, 0, 30) }}
                                    </td>
                                    <td>${{ $r_menu->price }}</td>
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
                                                @can('right.menu.edit')
                                                <a class="dropdown-item" href="{{ route('rmenu.edit', $r_menu->id) }}">Edit</a>
                                                @endcan
                                                @can('right.menu.delete')
                                                <a class="dropdown-item" href="{{ route('rmenu.delete', $r_menu->id) }}">Delete</a>
                                                @endcan
                                            </div>
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
@endsection
