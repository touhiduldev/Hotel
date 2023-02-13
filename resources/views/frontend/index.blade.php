@extends('frontend.master')

@section('content')
    <!-- banner-section -->
    <section class="banner-section p_relative centred">
        @foreach ($banner_shape as $shape)
            <div class="pattern-layer" style="background-image: url({{ asset('uploads/banner/' . $shape->banner_shape) }});">
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


    <!-- about-section -->
    <section class="about-section sec-pad">
        <div class="image_block_one">
            <div class="image-box">
                <figure class="image-1 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img
                        src="{{ asset('uploads/story/' . $stories->first()->staff) }}" alt=""></figure>
                <figure class="image-2"><img src="{{ asset('uploads/story/' . $stories->first()->vegetable) }}"
                        alt=""></figure>
                <figure class="vector-1"><img src="{{ asset('uploads/story/' . $stories->first()->bread) }}" alt="">
                </figure>
                <div class="shape">
                    <div class="shape-1"></div>
                    <div class="shape-2"
                        style="background-image: url({{ asset('uploads/story/' . $stories->first()->shape) }});"></div>
                </div>
            </div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box">
                            <div class="sec-title mb_30">
                                <span class="sub-title">{{ $stories->first()->sub_title }}</span>
                                <h2>{{ $stories->first()->title }}</span></h2>
                            </div>
                            <div class="text">
                                <p>{{ $stories->first()->desp }}</p>
                            </div>
                            <figure class="signature"><img src="{{ asset('uploads/story/' . $stories->first()->signature) }}"
                                    alt=""></figure>
                            <div class="btn-box">
                                <a href="about.html" class="theme-btn-one">Our Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- menu-section -->
    <section class="menu-section bg-color-1">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('frontend_asset/images/shape/shape-5.png') }});">
            </div>
            <div class="pattern-2" style="background-image: url({{ asset('frontend_asset/images/shape/shape-6.png') }});">
            </div>
            <div class="pattern-3" style="background-image: url({{ asset('frontend_asset/images/shape/shape-7.png') }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title light centred mb_100">
                    <span class="sub-title">Weekly Specials</span>
                    <h2>Menu Of The Day</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 menu-block">
                        <div class="menu-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape">
                                    <div class="shape-1"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-3.png') }});">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-4.png') }});">
                                    </div>
                                </div>
                                <div class="inner">
                                    @foreach ($left_munus as $menu)
                                        <div class="single-item">
                                            <div class="upper-box">
                                                <h4><a href="shop-details.html">{{ $menu->title }}</a></h4>
                                                <span class="price">${{ $menu->price }}</span>
                                            </div>
                                            <div class="text">
                                                <p>{{ $menu->desp }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 menu-block">
                        <div class="menu-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="shape">
                                    <div class="shape-1"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-3.png') }});">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-4.png') }});">
                                    </div>
                                </div>
                                <div class="inner">
                                    @foreach ($right_munus as $r_menu)
                                        <div class="single-item">
                                            <div class="upper-box">
                                                <h4><a href="shop-details.html">{{ $r_menu->title }}</a></h4>
                                                <span class="price">${{ $r_menu->price }}</span>
                                            </div>
                                            <div class="text">
                                                <p>{{ $r_menu->desp }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn mt_110 centred">
                    <a href="index-2.html" class="theme-btn-one">Download PDF</a>
                </div>
            </div>
        </div>
    </section>
    <!-- menu-section end -->


    <!-- shop-section -->
    <section class="shop-section">
        <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
            style="background-image: url({{ asset('frontend_asset/images/background/shop-bg.jpg') }});"></div>
        <div class="auto-container">
            <div class="sec-title mb_50">
                <span class="sub-title">Our Shop</span>
                <h2>Our All Delicious & Tasty <br />Product</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach ($all_products as $product)
                    <div class="shop-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('uploads/product/' . $product->image) }}"
                                        alt=""></figure>
                                <div class="btn-box">
                                    <a href="shop-details.html" class="theme-btn-one">Add To Cart</a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="{{ route('shop.product', $product->slug) }}">{{ $product->title }}</a></h5>
                                <ul class="rating clearfix">
                                    <li><i class="icon-7"></i></li>
                                    <li><i class="icon-7"></i></li>
                                    <li><i class="icon-7"></i></li>
                                    <li><i class="icon-7"></i></li>
                                    <li><i class="icon-7"></i></li>
                                </ul>
                                <span class="price">${{ $product->after_discount }}:00</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- shop-section end -->


    <!-- gallery-section -->
    <section class="gallery-section pt_65">
        <div class="auto-container">
            <div class="gallery-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach ($breakfasts as $breakfast)
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('uploads/breakfast/' . $breakfast->image) }}"
                                    alt=""></figure>
                            <div class="content-box">
                                <h4><a href="index-2.html">{{ $breakfast->title }}</a></h4>
                                <span>{{ $breakfast->sub_title }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- gallery-section -->


    <!-- promotion-section -->
    <section class="promotion-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_45">
                <span class="sub-title">Promotion</span>
                <h2>Check Our All Flavours <br />Summer Promo</h2>
            </div>
            <div class="promotion-block-one">
                <div class="inner-box">
                    <div class="shape"
                        style="background-image: url({{ asset('uploads/promotion/promo_top/' . $promotops->first()->shape2) }});">
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('uploads/promotion/promo_top/' . $promotops->first()->image) }}"
                                        alt=""></figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="content-shape"
                                    style="background-image: url({{ asset('uploads/promotion/promo_top/' . $promotops->first()->shape1) }});">
                                </div>
                                <h2>{{ $promotops->first()->title }}</h2>
                                <h4>{{ $promotops->first()->sub_title }}</h4>
                                <p>{{ $promotops->first()->desp }}</p>
                                <a href="index-2.html" class="theme-btn-one">{{ $promotops->first()->btn_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promotion-block-one">
                <div class="inner-box">
                    <div class="shape"
                        style="background-image: url({{ asset('uploads/promotion/promo_bottom/' . $promobotoms->first()->shape2) }});">
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="content-shape"
                                    style="background-image: url({{ asset('uploads/promotion/promo_bottom/' . $promobotoms->first()->shape1) }});">
                                </div>
                                <h2>{{ $promobotoms->first()->title }}</h2>
                                <h4>{{ $promobotoms->first()->sub_title }}</h4>
                                <p>{{ $promobotoms->first()->desp }}</p>
                                <a href="index-2.html" class="theme-btn-one">{{ $promobotoms->first()->btn_text }}</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image"><img
                                        src="{{ asset('uploads/promotion/promo_bottom/' . $promobotoms->first()->image) }}"
                                        alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promotion-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section sec-pad bg-color-2">
        <div class="pattern-layer">
            <div class="pattern-1"
                style="background-image: url({{ asset('frontend_asset/images/shape/shape-8.png') }});"></div>
            <div class="pattern-2"
                style="background-image: url({{ asset('frontend_asset/images/shape/shape-2.png') }});"></div>
        </div>
        <div class="image-box">
            <figure class="image-1"><img src="{{ asset('frontend_asset/images/resource/men-1.png') }}" alt="">
            </figure>
            <figure class="image-2"><img src="{{ asset('frontend_asset/images/resource/image-1.png') }}" alt="">
            </figure>
            <figure class="image-3"><img src="{{ asset('frontend_asset/images/resource/image-2.png') }}" alt="">
            </figure>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                    <div class="content-box">
                        <div class="sec-title mb_45">
                            <span class="sub-title">Testimonials</span>
                            <h2>What Clients Say <br />About <span>Ticrou</span></h2>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="testimonial-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-9"></i></div>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sit purus tempor dui.
                                        Pharetra consequat nibh elit urna interdum. Vivera quam a arcu duis Quis lectus
                                        donec nulladui sit in viverra tempus risus.”</p>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{ asset('frontend_asset/images/resource/testimonial-1.jpg') }}"
                                                alt=""></figure>
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
                            <div class="testimonial-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-9"></i></div>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sit purus tempor dui.
                                        Pharetra consequat nibh elit urna interdum. Vivera quam a arcu duis Quis lectus
                                        donec nulladui sit in viverra tempus risus.”</p>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{ asset('frontend_asset/images/resource/testimonial-1.jpg') }}"
                                                alt=""></figure>
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
                            <div class="testimonial-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-9"></i></div>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet sit purus tempor dui.
                                        Pharetra consequat nibh elit urna interdum. Vivera quam a arcu duis Quis lectus
                                        donec nulladui sit in viverra tempus risus.”</p>
                                    <div class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{ asset('frontend_asset/images/resource/testimonial-1.jpg') }}"
                                                alt=""></figure>
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
            </div>
        </div>
    </section>
    <!-- testimonial-section -->


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
                <span class="sub-title">{{ $discounts->first()->title }}</span>
                <h2>{{ $discounts->first()->heading }}</h2>
                <a href="index-2.html" class="theme-btn-one mt_45">{{ $discounts->first()->btn_text }}</a>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_45">
                <span class="sub-title">{{ $headingtitles->first()->title }}</span>
                <h2>{{ $headingtitles->first()->heading }}</h2>
            </div>
            <div class="row clearfix">
                @foreach ($blogstores as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img
                                                src="{{ asset('frontend_asset/images/news/news-1.jpg') }}"
                                                alt=""></a></figure>
                                    <div class="date">15 <span>APRIL</span></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="blog-details.html">{{ $blog->blog_title }}</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-10"></i><a href="blog-details.html">Admin</a></li>
                                        <li><i class="icon-11"></i><a href="blog-details.html">0 Comment</a></li>
                                    </ul>
                                    <p>{{ $blog->short_text }}</p>
                                    <div class="btn-box"><a href="blog-details.html" class="theme-btn-two">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- order-section -->
    <section class="order-section bg-color-2">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-14.png);"></div>
        <div class="shape">
            <div class="shape-1" style="background-image: url(assets/images/shape/shape-15.png);"></div>
            <div class="shape-2" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            <div class="shape-3" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            <div class="shape-4" style="background-image: url(assets/images/shape/shape-18.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Table Booking</span>
                <h2>Pre-Order to Make a <br />Reservation</h2>
            </div>
            <div class="form-inner">
                <form action="{{ route('book.table.store') }}" method="post">
                    @csrf
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="first_name" placeholder="First name" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="last_name" placeholder="Last name" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone number" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="select-box">
                                <select class="wide" name="perferred_menu_id" id="food_category">
                                    <option data-display="Perferred Food Menu">Perferred Food Menu</option>
                                    @foreach (App\Models\FoodCategory::all() as $food_category)
                                        <option value="{{ $food_category->id }}">{{ $food_category->food_category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="select-box">
                                <select class="wide" name="food_item_id" id="food_item_id">
                                    <option data-display="Perferred Food Item">Perferred Food Item</option>
                                    @foreach (App\Models\FoodItem::all() as $food_item)
                                        <option value="{{ $food_item->id }}">{{ $food_item->food_item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="select-box">
                                <select class="wide" name="number_person_id" id="number_person_id">
                                    <option data-display="Number of persons">Number of persons</option>
                                    @foreach (App\Models\NumberPerson::all() as $number_person)
                                        <option value="{{ $number_person->id }}">{{ $number_person->number_person }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="select-box">
                                <select class="wide" name="booking_type_id" id="booking_type_id">
                                    <option data-display="Booking type">Booking type</option>
                                    @foreach (App\Models\BookingType::all() as $booking_type)
                                        <option value="{{ $booking_type->id }}">{{ $booking_type->booking_type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="icon"><i class="icon-13"></i></div>
                            <input type="text" name="booking_date" placeholder="Booking date" id="datepicker">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="icon"><i class="icon-2"></i></div>
                            <input type="text" name="booking_time" placeholder="Booking time" id="timepicker">
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Special request"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                            <button type="submit" class="theme-btn-one">Make a Reservation</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- order-section end -->
@endsection
@section('footer_script')
    <script>
        $('#timepicker').timepicker();
    </script>
@endsection
