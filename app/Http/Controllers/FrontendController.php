<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerShape;
use App\Models\BlogStore;
use App\Models\Breakfast;
use App\Models\Discount;
use App\Models\HeadingTitle;
use App\Models\LeftMenu;
use App\Models\OurStory;
use App\Models\Product;
use App\Models\Promobottom;
use App\Models\Promotop;
use App\Models\RightMenu;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    function index()
    {
        $banner_shape = BannerShape::all();
        $banners = Banner::all();
        $stories = OurStory::all();
        $left_munus = LeftMenu::all();
        $right_munus = RightMenu::all();
        $all_products = Product::all();
        $breakfasts = Breakfast::all();
        $promotops = Promotop::all();
        $promobotoms = Promobottom::all();
        $discounts = Discount::all();
        $headingtitles = HeadingTitle::all();
        $blogstores = BlogStore::all();
        return view('frontend.index', [
            'banner_shape' => $banner_shape,
            'banners' => $banners,
            'stories' => $stories,
            'left_munus' => $left_munus,
            'right_munus' => $right_munus,
            'all_products' => $all_products,
            'breakfasts' => $breakfasts,
            'promotops' => $promotops,
            'promobotoms' => $promobotoms,
            'discounts' => $discounts,
            'headingtitles' => $headingtitles,
            'blogstores' => $blogstores,
        ]);
    }

    function shop()
    {
        $products = Product::all();
        return view('frontend.shop', [
            'products' => $products,
        ]);
    }

    function shop_product($slug_id)
    {
        $all_product = Product::where('slug', $slug_id)->get();
        return view('frontend.product', [
            'all_product' => $all_product,
        ]);
    }
}
