<?php

namespace App\Http\Controllers;

use App\Models\Promobottom;
use Illuminate\Http\Request;
use App\Models\Promotop;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PromotionController extends Controller
{
    function summer_promo(){
        return view('admin.promotion.summer_promo');
    }

    function promo_store(Request $request){
        if ($request->btn == 1) {

            $promo_image = $request->image;
            $promo_extension = $promo_image->getClientOriginalExtension();
            $file_name = Str::random(5).rand(100,999).'.'.$promo_extension;
            $promo_img = Image::make($promo_image)->save(public_path('uploads/promotion/promo_top/'.$file_name));

            $promo_shape1 = $request->shape1;
            $shape1_extension = $promo_shape1->getClientOriginalExtension();
            $shape1_name = Str::random(5).rand(100,999).'.'.$shape1_extension;
            $shape1_img = Image::make($promo_shape1)->save(public_path('uploads/promotion/promo_top/'.$shape1_name));

            $promo_shape2 = $request->shape2;
            $shape2_extension = $promo_shape2->getClientOriginalExtension();
            $shape2_name = Str::random(5).rand(100,999).'.'.$shape2_extension;
            $shape2_img = Image::make($promo_shape2)->save(public_path('uploads/promotion/promo_top/'.$shape2_name));

            Promotop::insert([
                'heading'=>$request->heading,
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'desp'=>$request->desp,
                'btn_text'=>$request->btn_text,
                'image'=>$file_name,
                'shape1'=>$shape1_name,
                'shape2'=>$shape2_name,
            ]);
            return back();
        }else {

            $promo_image = $request->image;
            $promo_extension = $promo_image->getClientOriginalExtension();
            $file_name = Str::random(5).rand(100,999).'.'.$promo_extension;
            $promo_img = Image::make($promo_image)->save(public_path('uploads/promotion/promo_bottom/'.$file_name));

            $promo_shape1 = $request->shape1;
            $shape1_extension = $promo_shape1->getClientOriginalExtension();
            $shape1_name = Str::random(5).rand(100,999).'.'.$shape1_extension;
            $shape1_img = Image::make($promo_shape1)->save(public_path('uploads/promotion/promo_bottom/'.$shape1_name));

            $promo_shape2 = $request->shape2;
            $shape2_extension = $promo_shape2->getClientOriginalExtension();
            $shape2_name = Str::random(5).rand(100,999).'.'.$shape2_extension;
            $shape2_img = Image::make($promo_shape2)->save(public_path('uploads/promotion/promo_bottom/'.$shape2_name));

            Promobottom::insert([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'desp'=>$request->desp,
                'btn_text'=>$request->btn_text,
                'image'=>$file_name,
                'shape1'=>$shape1_name,
                'shape2'=>$shape2_name,
            ]);
            return back();
        }
    }

    function promo_list(){
        $promo_tops = Promotop::all();
        $promo_bottoms = Promobottom::all();
        return view('admin.promotion.promo_list',[
            'promo_tops'=>$promo_tops,
            'promo_bottoms'=>$promo_bottoms,
        ]);
    }

    function promo_top_dlt($promo_top_id){
        $image = Promotop::where('id', $promo_top_id)->first()->image;
        $delete_from = public_path('uploads/promotion/promo_top/'.$image);
        unlink($delete_from);

        $shape1 = Promotop::where('id', $promo_top_id)->first()->shape1;
        $dlt_from = public_path('uploads/promotion/promo_top/'.$shape1);
        unlink($dlt_from);

        $shape2 = Promotop::where('id', $promo_top_id)->first()->shape2;
        $dlt_frm = public_path('uploads/promotion/promo_top/'.$shape2);
        unlink($dlt_frm);

        Promotop::find($promo_top_id)->delete();
        return back();
    }

    function promo_bottom_dlt($promo_bottom_id){
        $image = Promobottom::where('id', $promo_bottom_id)->first()->image;
        $delete_from = public_path('uploads/promotion/promo_bottom/'.$image);
        unlink($delete_from);

        $shape1 = Promobottom::where('id', $promo_bottom_id)->first()->shape1;
        $dlt_from = public_path('uploads/promotion/promo_bottom/'.$shape1);
        unlink($dlt_from);

        $shape2 = Promobottom::where('id', $promo_bottom_id)->first()->shape2;
        $dlt_frm = public_path('uploads/promotion/promo_bottom/'.$shape2);
        unlink($dlt_frm);

        Promobottom::find($promo_bottom_id)->delete();
        return back();
    }

}
