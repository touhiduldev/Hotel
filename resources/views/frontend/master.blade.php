<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Ticrou/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 17:34:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>@yield('title', 'Home Page - Ticrou')</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('frontend_asset/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('frontend_asset/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/jquery-ui.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link href="{{ asset('frontend_asset/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_asset/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index-2.html"><img
                                src="{{ asset('frontend_asset/images/logo.png') }}" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="http://azim.commonsupport.com/Ticrou/index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner">
                        <div class="left-column">
                            <ul class="info clearfix">
                                <li><i class="icon-1"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="icon-2"></i>Open Hours: Mon - Fri 8.00 am - 6.00 pm</li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="right-column">
                            <div class="btn-box">
                                <button type="button" class="x theme-btn-one" data-toggle="modal"
                                    data-target="#booktable">Book An Table</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('index') }}"><img
                                        src="{{ asset('frontend_asset/images/logo.png') }}" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">

                                        <li class="current dropdown">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>

                                        <li>
                                            <a href="about.html">About Us</a>
                                        </li>

                                        <li class="dropdown"><a href="">Pages</a>
                                            <ul>
                                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                <li><a href="{{ route('all.team') }}">Team</a></li>
                                                <li><a href="menu.html">Menu Page</a></li>
                                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="faq.html">Faq’s</a></li>
                                                <li><a href="reservation.html">Reservation</a></li>
                                                <li><a href="error.html">404</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="index-2.html">Blog</a>
                                        </li>

                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>

                                        @auth('customerlogin')
                                            <li style="margin-left: 300px">
                                                <a href="{{ route('customer.register') }}">
                                                    <span
                                                        style="font-size: 12px">{{ Auth::guard('customerlogin')->user()->name }}</span>
                                                </a>
                                            </li>
                                        @else
                                            <li style="margin-left: 300px">
                                                <a href="{{ route('customer.register') }}">
                                                    <span style="font-size: 12px">Sign in/Register</span>
                                                </a>
                                            </li>
                                        @endauth
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="nav-right">
                            <li class="search-box-outer search-toggler">
                                <i class="icon-3"></i>
                            </li>
                            <li class="shop-cart">
                                <a href="{{ route('cart.page') }}"><i
                                        class="icon-4"></i><span>{{ App\Models\Cart::all()->count() }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('index') }}"><img
                                        src="{{ asset('frontend_asset/images/logo.png') }}" alt=""></a>
                            </figure>
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
                                <a href="{{ route('cart.page') }}"><i
                                        class="icon-4"></i><span>{{ App\Models\Cart::all()->count() }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->
        {{-- POPUP TABLE SECTION START --}}
        <div class="modal fade bd-example-modal-lg" id="booktable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <div class="container">
                            <div class="sec-title centred mb_50">
                                <span class="sub-title">Table Booking</span>
                                <h2>Pre-Order to Make a <br />Reservation</h2>
                            </div>
                            <div class="form-inner">

                                <form action="{{ route('book.table.store') }}" method="post">
                                    @csrf
                                    <div class="row clearfix">

                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <input type="text" name="first_name" class="form-control"
                                                        placeholder="first name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <input type="text" name="last_name" class="form-control"
                                                        placeholder="last name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="email address" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Phone Number" name="phone">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Booking Date</label>
                                                    <input type="date" name="booking_date" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Booking Time</label>
                                                    <input type="time" name="booking_time" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <div class="select-box">
                                                        <select class="wide mb-3" name="perferred_menu_id"
                                                            id="food_category_id">
                                                            <option data-display="Perferred Food Menu">Select One
                                                            </option>
                                                            @foreach (App\Models\FoodCategory::all() as $food_category)
                                                                <option value="{{ $food_category->id }}">
                                                                    {{ $food_category->food_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <div class="select-box">
                                                        <select class="wide mb-3" name="food_item_id"
                                                            id="food_item_id">
                                                            <option style="height: 20px"
                                                                data-display="Perferred Food">Select One</option>
                                                            @foreach (App\Models\FoodItem::all() as $food_item)
                                                                <option value="{{ $food_item->id }}">
                                                                    {{ $food_item->food_item }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-4">
                                                <div class="form-group">
                                                    <div class="select-box">
                                                        <select class="wide mb-3" name="number_person_id">
                                                            <option data-display="Number Of Person">Select One</option>
                                                            @foreach (App\Models\NumberPerson::all() as $number_person)
                                                                <option value="{{ $number_person->id }}">
                                                                    {{ $number_person->number_person }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <div class="select-box">
                                                        <select class="wide mb-3" name="booking_type_id">
                                                            <option data-display="Booking Type">Booking Type</option>
                                                            @foreach (App\Models\BookingType::all() as $booking_type)
                                                                <option value="{{ $booking_type->id }}">
                                                                    {{ $booking_type->booking_type }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Message</label>
                                                    <textarea name="message" class="form-control" id="" cols="30" rows="4"
                                                        placeholder="Write here your requirement message..."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                            <button type="submit" class="theme-btn-one">Make a Reservation</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- POPUP TABLE SECTION END --}}
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img
                            src="{{ asset('frontend_asset/images/logo-2.png') }}" alt="" title=""></a>
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


        @yield('content')


        <!-- main-footer -->
        <footer class="main-footer bg-color-1">
            <div class="footer-top pt_85 pb_100">
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget schedule-widget text-right">
                                <div class="widget-title">
                                    <h3>Opening Times</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li>Monday – Thursday: 08AM – 10PM</li>
                                        <li>Friday – Saturday: 10AM–11:30PM</li>
                                        <li>Sunday: <span>Closed</span></li>
                                        <li>Booking TIme: 24/7 Hours</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget text-center">
                                <div class="shape">
                                    <div class="shape-1"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-19.png') }});">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url({{ asset('frontend_asset/images/shape/shape-20.png') }});">
                                    </div>
                                </div>
                                <div class="widget-content">
                                    <figure class="footer-logo"><a href="index-2.html"><img
                                                src="{{ asset('frontend_asset/images/footer-logo.png') }}"
                                                alt=""></a></figure>
                                    <div class="text">
                                        <p>Tincidunt neque pretium lectus donec risus. Mauris mi tempor nunc orc leo
                                            consequat vitae erat gravida lobortis nec et sagittis.</p>
                                    </div>
                                    <ul class="social-links clearfix">
                                        <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class=" footer-widget contact-widget text-left">
                                <div class="widget-title">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><span>Address: </span>New Hyde Park, NY 11040</li>
                                        <li><span>Email: </span><a href="mailto:example@info.com">example@info.com</a>
                                        </li>
                                        <li><span>Call: </span><a href="tel:912136660027">(+91) 213 666 0027</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p>Copyright 2022 by <a href="index-2.html">ticrou</a> All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->

    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('frontend_asset/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/owl.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/wow.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/validation.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/appear.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/scrollbar.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/product-filter.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/text_animation.js') }}"></script>
    <script src="{{ asset('frontend_asset/js/text_plugins.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('frontend_asset/js/jquery-ui.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ asset('/js/gmaps.js') }}"></script>
    <script src="{{ asset('/js/map-helper.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('frontend_asset/js/script.js') }}"></script>

    <script>
        // -----Country Code Selection
        $("#mobile_code").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });
    </script>
    @yield('footer_script')
    @yield('footer_script1')

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Ticrou/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 17:36:39 GMT -->

</html>
