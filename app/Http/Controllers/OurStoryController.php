<?php

namespace App\Http\Controllers;

use App\Models\OurStory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class OurStoryController extends Controller
{
    function story(){
        return view('admin.story.story');
    }

    function story_store(Request $request){
        $staff = $request->staff;
        $extension = $staff->getClientOriginalExtension();
        $file_name = Str::random(5).rand(100, 999).'.'.$extension;
        $img = Image::make($staff)->save(public_path('uploads/story/'.$file_name));

        $vegetable = $request->vegetable;
        $vegi_extension = $vegetable->getClientOriginalExtension();
        $vegetable_name = Str::random(5).rand(100, 999).'.'.$vegi_extension;
        $img = Image::make($vegetable)->save(public_path('uploads/story/'.$vegetable_name));

        $bread = $request->bread;
        $bread_extension = $bread->getClientOriginalExtension();
        $bread_name = Str::random(5).rand(100, 999).'.'.$bread_extension;
        $img = Image::make($bread)->save(public_path('uploads/story/'.$bread_name));

        $shape = $request->shape;
        $shape_extension = $shape->getClientOriginalExtension();
        $shape_name = Str::random(5).rand(100, 999).'.'.$shape_extension;
        $img = Image::make($shape)->save(public_path('uploads/story/'.$shape_name));

        $signature = $request->signature;
        $signature_extension = $signature->getClientOriginalExtension();
        $signature_name = Str::random(5).rand(100, 999).'.'.$signature_extension;
        $img = Image::make($signature)->save(public_path('uploads/story/'.$signature_name));

        OurStory::insert([
            'sub_title'=>$request->sub_title,
            'title'=>$request->title,
            'desp'=>$request->desp,
            'staff'=>$file_name,
            'vegetable'=>$vegetable_name,
            'bread'=>$bread_name,
            'shape'=>$shape_name,
            'signature'=>$signature_name,
            'opt'=>$request->option,
            'opt1'=>$request->option1,
            'opt2'=>$request->option2,
            'opt3'=>$request->option3,
            'opt4'=>$request->option4,
            'opt5'=>$request->option5,
        ]);
        return back();
    }

    function story_list(){
        $stories = OurStory::all();
        return view('admin.story.list',[
            'stories'=>$stories,
        ]);
    }

    function story_delete($story_id){

        $delete_staff = OurStory::where('id', $story_id)->first()->staff;
        $delete_vege = OurStory::where('id', $story_id)->first()->vegetable;
        $delete_bread = OurStory::where('id', $story_id)->first()->bread;
        $delete_shape = OurStory::where('id', $story_id)->first()->shape;
        $delete_sig = OurStory::where('id', $story_id)->first()->signature;
        $delete_f = public_path('uploads/story/'.$delete_staff);
        $delete_fr = public_path('uploads/story/'.$delete_vege);
        $delete_fro = public_path('uploads/story/'.$delete_bread);
        $delete_from = public_path('uploads/story/'.$delete_shape);
        $delete_froms = public_path('uploads/story/'.$delete_sig);
        unlink($delete_from);
        unlink($delete_f);
        unlink($delete_fr);
        unlink($delete_fro);
        unlink($delete_froms);

        OurStory::find($story_id)->delete();
        return back();
    }

}
