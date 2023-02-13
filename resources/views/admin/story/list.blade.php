@extends('layouts.dashboard')

@section('content')
<div class="header-content">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-12 m-auto">
                @can('story.list.view')
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white">Story List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Serial</th>
                                <th>Subtitle</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Staff</th>
                                <th>Vegetable</th>
                                <th>Bread</th>
                                <th>Shape</th>
                                <th>Signature</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($stories as $serial => $story )
                                <tr>
                                    <td>{{ $serial+1 }}</td>
                                    <td>{{ $story->sub_title }}</td>
                                    <td>{{ substr($story['title'],0 , 30) }}</td>
                                    <td>
                                        {{ substr($story['desp'], 0, 30) }}
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/story/'.$story->staff) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/story/'.$story->vegetable) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/story/'.$story->bread) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/story/'.$story->shape) }}" alt="">
                                    </td>
                                    <td>
                                        <img width="70" src="{{ asset('uploads/story/'.$story->signature) }}" alt="">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('story.delete', $story->id) }}">Delete</a>
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
</div>
@endsection
