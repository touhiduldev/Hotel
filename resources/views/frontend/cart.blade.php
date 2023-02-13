@extends('frontend.master')

@section('title')
@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{ asset('frontend_asset/images/background/page-title.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h2>Cart Page</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Cart Page</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- cart section -->
    <section class="cart-section p_relative pt_120 pb_120 bg-color-4">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 table-column">
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th class="prod-column">Product</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th class="price">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sub_totals = 0;
                                @endphp
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td colspan="4" class="prod-column">
                                            <div class="column-box">
                                                <div class="remove-btn">
                                                    <i class="icon-36"></i>
                                                </div>
                                                <div class="prod-thumb">
                                                    <img src="{{ asset('uploads/product/' . $cart->rel_to_product->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="prod-title">
                                                    {{ $cart->rel_to_product->title }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="price">${{ $cart->rel_to_product->after_discount }}</td>
                                        <td class="qty">
                                            <div class="item-quantity">
                                                <input class="quantity-spinner" type="text" value="{{ $cart->quantity }}"
                                                    name="quantity">
                                            </div>
                                        </td>
                                        @php
                                            $sub_total = $cart->rel_to_product->after_discount * $cart->quantity;
                                        @endphp
                                        <td class="sub-total">${{ $sub_total }}
                                        </td>
                                    </tr>
                                    @php
                                        $sub_totals += $cart->rel_to_product->after_discount * $cart->quantity;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="othre-content clearfix">
                <div class="coupon-box pull-left clearfix">
                    <input type="text" placeholder="Coupon code...">
                    <button type="button" class="theme-btn-one">Apply Coupon</button>
                </div>
                <div class="update-btn pull-right">
                    <button type="button" class="theme-btn-two">Update Cart</button>
                </div>
            </div>
            <div class="cart-total">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 offset-xl-7 cart-column">
                        <div class="total-cart-box clearfix">
                            <h3 class="fs_20 fw_bold lh_30 d_block pb_20">Cart Totals</h3>
                            <ul class="list clearfix mb_30">
                                <li>Subtotal:<span>${{ $sub_totals }}</span></li>
                                <li>Discount:<span>$0</span></li>
                                <li>Total:<span>$20.00</span></li>
                            </ul>
                            <a href="cart.html" class="theme-btn-one">Proceed to Checkout <i class="icon-74"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->
@endsection
