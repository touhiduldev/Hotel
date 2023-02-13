@extends('frontend.master')

@section('title')
@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Our Shop</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li>Our Shop</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- shop-page-section -->
    <section class="shop-page-section">
        <div class="auto-container">
            <div class="item-shorting clearfix">
                <div class="left-column pull-left clearfix">
                    <div class="text">
                        <p>Showing 1–12 of 50 Results</p>
                    </div>
                </div>
                <div class="right-column pull-right clearfix">
                    <div class="short-box clearfix">
                        <p>Short by</p>
                        <div class="select-box">
                            <select class="wide">
                                <option data-display="Popularity">Popularity</option>
                                <option value="1">New Collection</option>
                                <option value="2">Top Sell</option>
                                <option value="4">Top Ratted</option>
                            </select>
                        </div>
                    </div>
                    <div class="menu-box">
                        <button class="grid-view on"><i class="icon-27"></i></button>
                        <button class="list-view"><i class="icon-28"></i></button>
                    </div>
                </div>
            </div>
            <div class="wrapper grid">
                <div class="shop-grid-content">
                    <div class="row clearfix">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                                <div class="shop-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img
                                                    src="{{ asset('uploads/product/' . $product->image) }}" alt="">
                                            </figure>
                                            <div class="btn-box">
                                                <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <h5><a
                                                    href="{{ route('shop.product', $product->slug) }}">{{ $product->title }}</a>
                                            </h5>
                                            <ul class="rating clearfix">
                                                <li><i class="icon-7"></i></li>
                                                <li><i class="icon-7"></i></li>
                                                <li><i class="icon-7"></i></li>
                                                <li><i class="icon-7"></i></li>
                                                <li><i class="icon-7"></i></li>
                                            </ul>
                                            <span class="price">${{ $product->after_discount }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="shop-list-content">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-4.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Chicken & vegetable fry</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$20:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-5.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Strawberry Jam Toast </a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$13:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-6.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Penne pasta with meatball</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$10:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-7.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Fried eggs sandwiches</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$20:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-8.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Chicken & vegetable fry</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$22:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-1.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Strawberry Jam Toast</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$15:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-2.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Penne pasta with meatball</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$17:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-3.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Fried eggs sandwiches</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$13:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-9.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Strawberry Jam Toast </a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$16:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-10.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Strawberry Jam Toast</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$14:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-11.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Fried eggs sandwiches</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$22:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-12.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Chicken & vegetable fry</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$12:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-13.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Strawberry Jam Toast</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$17:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-14.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Penne pasta with meatball</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$12:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-15.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Fried eggs sandwiches</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$15:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                            <div class="shop-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/shop/shop-16.png" alt="">
                                        </figure>
                                        <div class="btn-box">
                                            <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h5><a href="shop-details.html">Strawberry Jam Toast</a></h5>
                                        <ul class="rating clearfix">
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                            <li><i class="icon-7"></i></li>
                                        </ul>
                                        <span class="price">$18:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrapper centred">
                <ul class="pagination clearfix">
                    <li><a href="shop.html"><i class="icon-29"></i></a></li>
                    <li><a href="shop.html" class="current">1</a></li>
                    <li><a href="shop.html">2</a></li>
                    <li><a href="shop.html">3</a></li>
                    <li><a href="shop.html"><i class="icon-30"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- shop-page-section end -->
@endsection
