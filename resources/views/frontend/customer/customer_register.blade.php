@extends('frontend.master')

@section('title')
    Touhidul ~ Customer Login Register
@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{ asset('frontend_asset/images/background/page-title.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Customer Registration</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Register Your Account</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- contact-section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 form-column m-auto">
                    <div class="form-inner">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <h2>Register Your Account</h2>
                        <form action="{{ route('customer.acc.register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id=""
                                    placeholder="email">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id=""
                                    placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id=""
                                    placeholder="Re-type Password">
                            </div>
                            <div>
                                <button type="submit" class="theme-btn-one">Register</button>
                            </div>
                            <div class="mt-3">
                                <span>Have already account? Click here to <a href="{{ route('customer.login') }}">SIGN
                                        IN</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
