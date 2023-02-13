<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Breakfast;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class BreakfastController extends Controller
{
    function breakfast(){
        $breakfast_item = Breakfast::all();
        return view('admin.breakfast.breakfast',[
            'breakfast_item'=>$breakfast_item,
        ]);
    }

    function breakfast_store(Request $request){

        $b_image = $request->image;
        $b_extension = $b_image->getClientOriginalExtension();
        $file_name = Str::random(5).rand(100, 999).'.'.$b_extension;
        $img = Image::make($b_image)->save(public_path('uploads/breakfast/'.$file_name));

        Breakfast::insert([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'image'=>$file_name,
        ]);
        return back();
    }

    function breakfast_delete($breakfast_id){

        $break_image = Breakfast::where('id', $breakfast_id)->first()->image;
        $delete_from = public_path('uploads/breakfast/'.$break_image);
        unlink($delete_from);

        Breakfast::find($breakfast_id)->delete();
        return back();
    }
}
