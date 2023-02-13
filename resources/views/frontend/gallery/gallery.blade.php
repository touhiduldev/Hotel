@extends('frontend.master')

@section('title')
    Ticrou ~ Gallery Page
@endsection

@section('content')
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('index') }}"><img
                                src="{{ asset('frontend_asset/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <ul class="nav-right">
                    <li class="search-box-outer search-toggler">
                        <i class="icon-3"></i>
                    </li>
                    <li class="shop-cart">
                        <a href="shop.html"><i class="icon-4"></i><span>3</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="{{ asset('frontend_asset/images/logo-2.png') }}"
                        alt="" title=""></a></div>
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


    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer"
            style="background-image: url({{ asset('frontend_asset/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Gallery 1</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Gallery 1</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- gallery-style-three -->
    <section class="gallery-style-three">
        <div class="auto-container">
            <div class="sortable-masonry">
                <div class="filters centred mb_60">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">View All</li>
                        <li class="filter" data-role="button" data-filter=".gourmet">Gourmet</li>
                        <li class="filter" data-role="button" data-filter=".restaurant">Restaurant</li>
                        <li class="filter" data-role="button" data-filter=".turist">Turist</li>
                        <li class="filter" data-role="button" data-filter=".wedding">Wedding</li>
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    @foreach ($galleres as $gallery)
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all product wedding restaurant turist gourmet">
                            <div class="gallery-block-two">
                                <div class="inner-box">
                                    <figure class="image-box"><img class="w-100 img-fluid"
                                            src="{{ asset('uploads/gallery/' . $gallery->image) }}" alt=""></figure>
                                    <div class="content-box">
                                        <div class="view-btn"><a href="{{ asset('uploads/gallery/' . $gallery->image) }}"
                                                class="lightbox-image w-100 img-fluid" data-fancybox="gallery"><i
                                                    class="icon-16"></i></a></div>
                                        <div class="text">
                                            <p>{{ $gallery->sub_title }}</p>
                                            <h3><a href="{{ route('gallery.details') }}">{{ $gallery->title }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- gallery-style-three end -->
@endsection
