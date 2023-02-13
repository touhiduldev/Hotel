<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function add_cart(Request $request)
    {
        Cart::insert([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);
        return back()->with('success', 'Cart Added Successfully!');
    }

    function cart_page()
    {
        $carts = Cart::all();
        return view('frontend.cart', [
            'carts' => $carts,
        ]);
    }
}