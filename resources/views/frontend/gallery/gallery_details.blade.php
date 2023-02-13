@extends('frontend.master')

@section('title')
    Touhidul ~ Gallery Details
@endsection

@section('content')
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('frontend_asset/images/logo-2.png') }}"
                        alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->

    <section class="banner-section p_relative centred">
        @foreach ($banner_shape as $shape)
            <div class="pattern-layer"
                style="background-image: url({{ asset('uploads/banner/' . $shape->banner_shape) }});">
            </div>
        @endforeach
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            @foreach ($banners as $banner)
                <div class="slide-item p_relative">
                    <div class="image-layer p_absolute"
                        style="background-image:url({{ asset('uploads/banner/' . $banner->banner_img) }})"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <span class="animation_text_word special-text p_relative d_block"></span>
                            <h2 class="p_relative d_block">{{ $banner->title }}</h2>
                            <p class="p_relative text-center">{{ $banner->desp }}</p>
                            <div class="btn-box">
                                <a href="index-2.html" class="theme-btn-one">Make Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- banner-section end -->

    <!-- about-style-three -->
    <section class="about-style-three">
        {{-- <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-34.png);"></div> --}}
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div class="image_block_two">
                        <div class="image-box">
                            <div class="shape">
                                <div class="shape-1"
                                    style="background-image: url({{ asset('uploads/story/' . $stories->first()->shape) }});">
                                </div>
                                <div class="shape-2"
                                    style="background-image: url({{ asset('uploads/story/' . $stories->first()->shape) }});">
                                </div>
                            </div>
                            <figure class="image image-1"><img
                                    src="{{ asset('uploads/story/' . $stories->first()->staff) }}" alt=""></figure>
                            <figure class="image image-2"><img
                                    src="{{ asset('frontend_asset/images/resource/about-3.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box ml_140">
                            <div class="sec-title mb_20">
                                <span class="sub-title">{{ $stories->first()->sub_title }}</span>
                                <h2>{{ $stories->first()->title }}</span></h2>
                            </div>
                            <div class="text mb_30">
                                <p>{{ $stories->first()->desp }}</p>
                            </div>
                            <ul class="list-style-one clearfix mb_30">
                                <li>{{ $stories->first()->opt }}</li>
                                <li>{{ $stories->first()->opt1 }}</li>
                                <li>{{ $stories->first()->opt2 }}</li>
                                <li>{{ $stories->first()->opt3 }}</li>
                                <li>{{ $stories->first()->opt4 }}</li>
                                <li>{{ $stories->first()->opt5 }}</li>
                            </ul>
                            <div class="btn-box">
                                <a href="about.html" class="theme-btn-one">Our Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-three end -->


    <!-- deal-section -->
    <section class="deal-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title mb_45">
                <span class="sub-title">Special Deal</span>
                <h2>Deal Of The Day</h2>
            </div>
            <div class="row clearfix">
                @foreach ($special_deal as $deal)
                    <div class="col-lg-3 col-md-6 col-sm-12 deal-block">
                        <div class="deal-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img
                                            src="{{ asset('uploads/gallery/special_deal/' . $deal->image) }}"
                                            alt="">
                                    </figure>
                                    <span>${{ $deal->price }}</span>
                                </div>
                                <div class="text">
                                    <h3><a
                                            href="{{ route('special.deal.details', $deal->slug) }}">{{ $deal->rel_to_pcat->p_category }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- deal-section end -->


    <!-- menu-style-three -->
    <section class="menu-style-three">
        <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
            style="background-image: url({{ asset('frontend_asset/images/background/menu-bg.jpg') }});"></div>
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('frontend_asset/images/shape/shape-35.png') }});">
            </div>
            <div class="pattern-2" style="background-image: url({{ asset('frontend_asset/images/shape/shape-36.png') }});">
            </div>
            <div class="pattern-3" style="background-image: url({{ asset('frontend_asset/images/shape/shape-37.png') }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                    <div class="sec-title light mr_60">
                        <span class="sub-title">Weekly Specials</span>
                        <h2>Menu Of The Day</h2>
                        <p>Dignissim ultrices nibh lectus. Etiam imperdiet nam auctor lectus ac cursus nibh. Tempor
                            dignissim posuere nunc quisque. Nunc turpis gravida velit egestas.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 menu-column">
                    <div class="menu-content">
                        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">

                            <div class="menu-block-two">
                                <div class="title">
                                    <h2>Selected Menu</h2>
                                    <div class="shape"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-26.png') }});">
                                    </div>
                                </div>
                                <div class="inner-box">
                                    @foreach ($left_menu as $l_menu)
                                        <div class="single-item">
                                            <figure class="menu-image"><img
                                                    src="{{ asset('frontend_asset/images/resource/menu-1.jpg') }}"
                                                    alt=""></figure>
                                            <div class="inner">
                                                <div class="upper-box">
                                                    <h4><a href="{{ route('shop') }}">{{ $l_menu->title }}</a>
                                                    </h4>
                                                    <span class="price">${{ $l_menu->price }}</span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $l_menu->desp }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="menu-block-two">
                                <div class="title">
                                    <h2>Sweet Pleasure</h2>
                                    <div class="shape"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-26.png') }});">
                                    </div>
                                </div>
                                <div class="inner-box">
                                    @foreach ($right_menu as $r_menu)
                                        <div class="single-item">
                                            <figure class="menu-image"><img
                                                    src="{{ asset('frontend_asset/images/resource/menu-4.jpg') }}"
                                                    alt=""></figure>
                                            <div class="inner">
                                                <div class="upper-box">
                                                    <h4><a href="{{ route('shop') }}">{{ $r_menu->title }}</a></h4>
                                                    <span class="price">${{ $r_menu->price }}</span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $r_menu->desp }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- menu-style-three end -->

    <!-- team-section -->
    <section class="team-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_45">
                <span class="sub-title">Our Chef</span>
                <h2>Our Smart Chef</h2>
            </div>
            <div class="inner-container wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="row clearfix">
                    @foreach ($all_staffs as $staff)
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('uploads/chef/' . $staff->image) }}"
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
                                        <h3><a href="{{ route('team.details', $staff->slug) }}">{{ $staff->name }}</a>
                                        </h3>
                                        <span class="designation">{{ $staff->designation }}</span>
                                        <p>{{ $staff->short_desp }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="more-btn centred mt_60">
                <a href="{{ route('all.team') }}" class="theme-btn-one">More Staff</a>
            </div>
        </div>
    </section>
    <!-- team-section end -->


    <!-- gallery-style-two -->
    <section class="gallery-style-two pb_50">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title mr_50">
                        <span class="sub-title">Our Gallery</span>
                        <h2>Let’s See Our Gallery</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit purus egestas diam sit vitae egestas.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                    <div class="carousel-content ml_30">
                        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="{{ asset('frontend_asset/images/gallery/gallery-4.jpg') }}"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <div class="view-btn"><a
                                                href="{{ asset('frontend_asset/images/gallery/gallery-4.jpg') }}"
                                                class="lightbox-image" data-fancybox="gallery"><i
                                                    class="icon-16"></i></a></div>
                                        <div class="text">
                                            <p>Tourist Guide</p>
                                            <h3><a href="index-4.html">Main Tourist Spots</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="{{ asset('frontend_asset/images/gallery/gallery-5.jpg') }}"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <div class="view-btn"><a
                                                href="{{ asset('frontend_asset/images/gallery/gallery-4.jpg') }}"
                                                class="lightbox-image" data-fancybox="gallery"><i
                                                    class="icon-16"></i></a></div>
                                        <div class="text">
                                            <p>Tourist Guide</p>
                                            <h3><a href="index-4.html">Main Tourist Spots</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img
                                            src="{{ asset('frontend_asset/images/gallery/gallery-6.jpg') }}"
                                            alt=""></figure>
                                    <div class="content-box">
                                        <div class="view-btn"><a
                                                href="{{ asset('frontend_asset/images/gallery/gallery-4.jpg') }}"
                                                class="lightbox-image" data-fancybox="gallery"><i
                                                    class="icon-16"></i></a></div>
                                        <div class="text">
                                            <p>Tourist Guide</p>
                                            <h3><a href="index-4.html">Main Tourist Spots</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery-style-two end -->


    <!-- cta-section -->
    <section class="cta-section centred bg-color-1 sec-pad">
        <div class="shape">
            <div class="shape-1 p_absolute l_0 t_0"
                style="background-image: url({{ asset('frontend_asset/images/shape/shape-10.png') }});"></div>
            <div class="shape-2 p_absolute l_60 t_60"
                style="background-image: url({{ asset('frontend_asset/images/shape/shape-11.png') }});"></div>
            <div class="shape-3 p_absolute"
                style="background-image: url({{ asset('frontend_asset/images/shape/shape-12.png') }});"></div>
            <div class="shape-4 p_absolute"
                style="background-image: url({{ asset('frontend_asset/images/shape/shape-13.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title light">
                <span class="sub-title">Get 25% Discount</span>
                <h2>Explore Special Taste & The <br />Best Quality</h2>
                <a href="index-2.html" class="theme-btn-one mt_45">Make a Reservation</a>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- testimonial-style-three -->
    <section class="testimonial-style-three sec-pad">
        <div class="shape">
            <div class="shape-1" style="background-image: url({{ asset('frontend_asset/images/shape/shape-2.png') }});">
            </div>
            <div class="shape-2" style="background-image: url({{ asset('frontend_asset/images/shape/shape-38.png') }});">
            </div>
        </div>
        <div class="image-box">
            <figure class="image-1"><img src="{{ asset('frontend_asset/images/resource/men-3.png') }}" alt="">
            </figure>
            <figure class="image-2"><img src="{{ asset('frontend_asset/images/resource/about-2.png') }}" alt="">
            </figure>
            <figure class="image-3"><img src="{{ asset('frontend_asset/images/resource/image-2.png') }}" alt="">
            </figure>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 testimonial-column">
                    <div class="sec-title mb_95">
                        <span class="sub-title">Testimonials</span>
                        <h2>What Clients Say</h2>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-9"></i></div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sit purus tempor dui.
                                    Pharetra consequat nibh elit urna Vivera quam arcuduis Quis lectus.”</p>
                                <ul class="rating clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4>Sandra Bullock</h4>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-9"></i></div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sit purus tempor dui.
                                    Pharetra consequat nibh elit urna Vivera quam arcuduis Quis lectus.”</p>
                                <ul class="rating clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4>Sandra Bullock</h4>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-9"></i></div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sit purus tempor dui.
                                    Pharetra consequat nibh elit urna Vivera quam arcuduis Quis lectus.”</p>
                                <ul class="rating clearfix">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                </ul>
                                <h4>Sandra Bullock</h4>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-three end -->


    <!-- service-section -->
    <section class="service-section sec-pad centred">
        <div class="pattern-layer"
            style="background-image: url({{ asset('frontend_asset/images/shape/shape-2.png') }});"></div>
        <div class="auto-container">
            <div class="sec-title mb_50">
                <span class="sub-title">Services</span>
                <h2>Quality & Passion with <br />Our Services</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <h3><a href="index-4.html">Birtdhday Party</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit purus egestas diam sit vitae egestas
                                suspendisse amet tricies.</p>
                            <div class="btn-box">
                                <a href="index-4.html" class="theme-btn-two">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h3><a href="index-4.html">French Bakery</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit purus egestas diam sit vitae egestas
                                suspendisse amet tricies.</p>
                            <div class="btn-box">
                                <a href="index-4.html" class="theme-btn-two">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-19"></i></div>
                            <h3><a href="index-4.html">Coffee to Go</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit purus egestas diam sit vitae egestas
                                suspendisse amet tricies.</p>
                            <div class="btn-box">
                                <a href="index-4.html" class="theme-btn-two">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-20"></i></div>
                            <h3><a href="index-4.html">Online Delivery</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit purus egestas diam sit vitae egestas
                                suspendisse amet tricies.</p>
                            <div class="btn-box">
                                <a href="index-4.html" class="theme-btn-two">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- video-style-two -->
    <section class="video-style-two centred">
        <div class="auto-container">
            <div class="inner-box"
                style="background-image: url({{ asset('frontend_asset/images/background/video-bg-2.jpg') }});">
                <div class="sec-title light mb_100">
                    <span class="sub-title">Watch Video</span>
                    <h2>Our Special & Best Quality <br />Cooking</h2>
                </div>
                <div class="video-btn">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                        data-caption=""><i class="icon-14"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- video-style-two end -->


    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_45">
                <span class="sub-title">Ticrou News</span>
                <h2>Know More About The <br />Ticrou Article</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('frontend_asset/images/news/news-1.jpg') }}"
                                            alt=""></a></figure>
                                <div class="date">15 <span>APRIL</span></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Right Way to Make Cold Coffee</a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="icon-10"></i><a href="blog-details.html">Admin</a></li>
                                    <li><i class="icon-11"></i><a href="blog-details.html">0 Comment</a></li>
                                </ul>
                                <p>In ornare pellentesque sed elementum sed ac adipiscing suscipit.</p>
                                <div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('frontend_asset/images/news/news-2.jpg') }}"
                                            alt=""></a></figure>
                                <div class="date">12 <span>APRIL</span></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Truly Amazing Blueberry Recipes</a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="icon-10"></i><a href="blog-details.html">Admin</a></li>
                                    <li><i class="icon-11"></i><a href="blog-details.html">4 Comment</a></li>
                                </ul>
                                <p>In ornare pellentesque sed elementum sed ac adipiscing suscipit.</p>
                                <div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="{{ asset('frontend_asset/images/news/news-3.jpg') }}"
                                            alt=""></a></figure>
                                <div class="date">11 <span>APRIL</span></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">The benefits of Buffalo Meat</a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="icon-10"></i><a href="blog-details.html">Admin</a></li>
                                    <li><i class="icon-11"></i><a href="blog-details.html">1 Comment</a></li>
                                </ul>
                                <p>In ornare pellentesque sed elementum sed ac adipiscing suscipit.</p>
                                <div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->
@endsection
