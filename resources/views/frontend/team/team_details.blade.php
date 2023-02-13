@extends('frontend.master')

@section('title')
    Touhidul ~ Team Details Page
@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{ asset('frontend_asset/images/background/page-title.jpg') }});">
            <div class="auto-container">
                <div class="content-box">
                    <h2>Team Details</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li>Team Details</li>
                    </ul>
                </div>
            </div>
    </section>
    <!-- End Page Title -->


    <!-- team-details -->
    <section class="team-details p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="image-box mr_50">
                    <div class="shape"
                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-2.png') }});">
                    </div>
                    <figure class="image"><img src="{{ asset('uploads/chef/' . $all_team->first()->image) }}"
                            alt=""></figure>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="team-details-content">
                        <div class="team-info">
                            <h2>{{ $all_team->first()->name }}</h2>
                            <span class="designation">{{ $all_team->first()->designation }}</span>
                            <div class="text">
                                <p>{!! $all_team->first()->long_desp !!}</p>
                            </div>
                            <ul class="info-list clearfix">
                                <li><span>Expertise: </span>{{ $all_team->first()->expertise }}</li>
                                <li><span>Experience: </span>{{ $all_team->first()->experience }} Years</li>
                                <li><span>Email: </span><a
                                        href="mailto:robertdowney@gmail.com">{{ $all_team->first()->email }}</a>
                                </li>
                                <li><span>Phone: </span><a href="tel:913336660021">{{ $all_team->first()->phone }}</a>
                                </li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a target="_blank" href="{{ $all_team->first()->fb_url }}"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" href="{{ $all_team->first()->twtr_url }}"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="{{ $all_team->first()->insta_url }}"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="skills-inner mb_70">
                            <div class="text mb_30">
                                <h3>My Skills</h3>
                                <p>{!! $all_team->first()->skills !!}</p>
                            </div>
                            <div class="progress-box">
                                @foreach ($team_percentage as $percentage)
                                    <div class="progress-box p_relative d_block mb_35">
                                        <p>{{ $percentage->title }}</p>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="{{ $percentage->percentage }}%">
                                            </div>
                                            <div class="count-text">{{ $percentage->percentage }}%</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="contact-inner">
                            <h3>Contact Me</h3>
                            <div class="form-inner">
                                <form action="http://azim.commonsupport.com/Ticrou/team-details.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="name" placeholder="Your name" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Your email" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone number" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Type message"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn-one">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details end -->
@endsection
