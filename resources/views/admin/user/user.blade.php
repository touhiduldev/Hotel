@extends('layouts.dashboard')

@section('content')
<section class="d-flex align-items-center">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <a href="{{ route('home') }}"><img src="{{ asset('db_asset/images/logo-icon.png') }}" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                        <h5 class="mb-3 text-center">Update Your Prifle</h5>

                        <div class="mb-3">
                            <label class="form-label"><strong>Name</strong></label>
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><strong>Email</strong></label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Update</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <a href="{{ route('home') }}"><img src="{{ asset('db_asset/images/logo-icon.png') }}" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                        <h5 class="mb-3 text-center">Update Password</h5>

                        <div class="mb-3">
                            <label class="form-label"><strong>Current Password</strong></label>
                            <input type="password" class="form-control" name="current_password" placeholder="********">
                            @error('current_password')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><strong>New Password</strong></label>
                            <input type="password" class="form-control" name="new_password" placeholder="********">
                            @error('new_password')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="********">
                            @error('password_confirmation')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--end container-->
</section>
@endsection
