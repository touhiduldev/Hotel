<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    function testimonials(){
        return view('admin.testimonial.testimonials');
    }

    function test_store(Request $request){

        $background_image = $request->bg_image;
        $bg_extension = $background_image->getClientOriginalExtension();
        $bg_name = Str::random(5).rand(100,999).'.'.$bg_extension;
        Image::make($background_image)->save(public_path('uploads/testimonial/'.$bg_name));

        $bg_shape = $request->bg_shape;
        $bg_shape_extension = $bg_shape->getClientOriginalExtension();
        $bg_shape_name = Str::random(5).rand(100,999).'.'.$bg_shape_extension;
        Image::make($bg_shape)->save(public_path('uploads/testimonial/'.$bg_shape_name));

        $man_image = $request->man_image;
        $man_extension = $man_image->getClientOriginalExtension();
        $man_image_name = Str::random(5).rand(100,999).'.'.$man_extension;
        Image::make($man_image)->save(public_path('uploads/testimonial/'.$man_image_name));

        $vegi1 = $request->vegi1;
        $vegi1_extension = $vegi1->getClientOriginalExtension();
        $vegi1_name = Str::random(5).rand(100,999).'.'.$vegi1_extension;
        Image::make($vegi1)->save(public_path('uploads/testimonial/'.$vegi1_name));

        $vegi2 = $request->vegi2;
        $vegi2_extension = $man_image->getClientOriginalExtension();
        $vegi2_image_name = Str::random(5).rand(100,999).'.'.$vegi2_extension;
        Image::make($vegi2)->save(public_path('uploads/testimonial/'.$vegi2_image_name));

        Testimonials::insert([
            'heading'=>$request->heading,
            'bg_image'=>$bg_name,
            'bg_shape'=>$bg_shape_name,
            'man_image'=>$man_image_name,
            'vegi1'=>$vegi1_name,
            'vegi2'=>$vegi2_image_name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function test_list(){
        $testimonials = Testimonials::all();
        return view('admin.testimonial.list',[
            'testimonials'=>$testimonials,
        ]);
    }

    function test_delete($test_id){

    }

}
