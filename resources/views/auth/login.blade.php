<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/landrick/dashboard/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:26:18 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Landrick - Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="Version" content="v4.3.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('db_asset/images/actual_size_logo.png') }}" />
        <!-- Css -->
        <link href="{{ asset('db_asset/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('db_asset/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('db_asset/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('db_asset/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('db_asset/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Hero Start -->
        <section class="bg-home bg-circle-gradiant d-flex align-items-center">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card form-signin p-4 rounded shadow">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <a href="index.html"><img src="{{ asset('db_asset/images/actual_size_logo.png') }}" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                                <h5 class="mb-3 text-center">Login your account</h5>

                                <div class="form-floating mb-2">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="hello@example.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="floatingEmail">Email Address</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="********">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="floatingPassword">Password</label>
                                </div>


                                <button class="btn btn-primary w-100" type="submit">Login</button>

                                <div class="col-12 text-center mt-3">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="{{ route('register') }}" class="text-dark fw-bold">Sign Up</a></p>
                                </div><!--end col-->
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('db_asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('db_asset/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('db_asset/libs/simplebar/simplebar.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('db_asset/js/plugins.init.js') }}"></script>
        <script src="{{ asset('db_asset/js/app.js') }}"></script>

    </body>


<!-- Mirrored from shreethemes.in/landrick/dashboard/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:26:18 GMT -->
</html>
