@extends('frontend.master')

@section('title')
    Touhidul ~ Our Team
@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{ asset('frontend_asset/images/background/page-title.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Our Team</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Our Team</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- team-section -->
    <section class="team-page-section p_relative">
        <div class="auto-container">
            <div class="inner-container wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="row clearfix">
                    @foreach ($all_team as $team)
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('uploads/chef/' . $team->image) }}"
                                                alt="">
                                        </figure>
                                        <div class="share-box p_absolute">
                                            <a href="index-2.html" class="share-icon"><i class="icon-15"></i></a>
                                            <ul class="share-links p_absolute clearfix">
                                                <li><a href="index-4.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="index-4.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index-4.html"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{ route('team.details', $team->slug) }}">{{ $team->name }}</a></h3>
                                        <span class="designation">{{ $team->designation }}</span>
                                        <p>{{ $team->short_desp }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->
@endsection
