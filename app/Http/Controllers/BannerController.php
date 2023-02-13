<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerShape;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    function banner(){
        $banners = Banner::all();
        $banner_shape = BannerShape::all();
        return view('admin.banner.banner',[
            'banners'=>$banners,
            'banner_shape'=>$banner_shape,
        ]);
    }

// BANNER INSERT SECTION START

    function banner_store(Request $request){

        $banner = $request->banner_img;
        $extension = $banner->getClientOriginalExtension();
        $file_name = Str::random(5).rand(100, 999).'.'.$extension;
        $img = Image::make($banner)->save(public_path('uploads/banner/'.$file_name));

        Banner::insert([
            'title'=>$request->title,
            'desp'=>$request->desp,
            'btn_text'=>$request->btn_text,
            'banner_img'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }
// BANNER INSERT SECTION END

// BANNER EDIT SECTION

    function banner_edit($banner_id){
        $banners = Banner::find($banner_id);
        return view('admin.banner.banner_edit',[
            'banners'=>$banners,
        ]);
    }

// BANNER UPDATE SECTION START

    function banner_update(Request $request){
        $banner_img = $request->banner_img;

        if ($banner_img == '') {
            Banner::where('id', $request->banner_id)->update([
                'title'=>$request->title,
                'desp'=>$request->desp,
                'btn_text'=>$request->btn_text,
            ]);
            return back();
        }else {
            $banner = Banner::where('id', $request->banner_id)->first()->banner_img;
            $delete_from = public_path('uploads/banner/'.$banner);
            unlink($delete_from);

            $extension = $banner_img->getClientOriginalExtension();
            $file_name = Str::random(5).rand(100, 999).'.'.$extension;
            $img = Image::make($banner_img)->save(public_path('uploads/banner/'.$file_name));

            Banner::where('id', $request->banner_id)->update([
                'title'=>$request->title,
                'desp'=>$request->desp,
                'btn_text'=>$request->btn_text,
                'banner_img'=>$file_name,
            ]);
            return back();
        }
    }
// BANNER UPDATE SECTION END

// BANNER DELETE SECTION START

    function banner_delete($banner_id){
        $banner = Banner::where('id', $banner_id)->first()->banner_img;
        $delete_from = public_path('uploads/banner/'.$banner);
        unlink($delete_from);

        Banner::find($banner_id)->delete();
        return back();
    }

// BANNER DELETE SECTION END

    function shape_store(Request $request){

        $banner_shape = $request->banner_shape;
        $shape_extension = $banner_shape->getClientOriginalExtension();
        $shape_name = Str::random(5).rand(100, 999).'.'.$shape_extension;
        $img = Image::make($banner_shape)->save(public_path('uploads/banner/'.$shape_name));

        BannerShape::insert([
            'banner_shape'=>$shape_name,
        ]);
        return back();
    }

    function shape_delete($shape_id){

        $shape = BannerShape::where('id', $shape_id)->first()->banner_shape;
        $delete_from = public_path('uploads/banner/'.$shape);
        unlink($delete_from);

        BannerShape::find($shape_id)->delete();
        return back();
    }


}
