<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerShape;
use App\Models\Gallery;
use App\Models\LeftMenu;
use App\Models\OurChef;
use App\Models\OurStory;
use App\Models\Product;
use App\Models\RightMenu;
use App\Models\SpecialDeal;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    function gallery()
    {
        $galleres = Gallery::all();
        return view('frontend.gallery.gallery', [
            'galleres' => $galleres,
        ]);
    }

    function add_gallery()
    {
        return view('admin.gallery.add_gallery');
    }

    function gallery_store(Request $request)
    {

        $gallery_img = $request->image;
        $extension = $gallery_img->getClientOriginalExtension();
        $file_name = Str::random(5) . rand(100, 999) . '.' . $extension;
        Image::make($gallery_img)->save(public_path('uploads/gallery/' . $file_name));

        Gallery::insert([
            'sub_title' => $request->sub_title,
            'title' => $request->title,
            'image' => $file_name,
        ]);
        return back();
    }

    function gallery_details()
    {
        $banner_shape = BannerShape::all();
        $banners = Banner::all();
        $stories = OurStory::all();
        $special_deal = SpecialDeal::all();
        $left_menu = LeftMenu::all();
        $right_menu = RightMenu::all();
        $all_staffs = OurChef::all();
        $products = Product::find('slug');
        return view('frontend.gallery.gallery_details', [
            'banner_shape' => $banner_shape,
            'banners' => $banners,
            'stories' => $stories,
            'special_deal' => $special_deal,
            'left_menu' => $left_menu,
            'right_menu' => $right_menu,
            'all_staffs' => $all_staffs,
            'products' => $products,
        ]);
    }
}
