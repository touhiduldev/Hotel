<?php

namespace App\Http\Controllers;

use App\Models\OurChef;
use App\Models\OurchefPercentage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class OurChefController extends Controller
{
    function chef_details()
    {
        return view('admin.our_chef.chef_details');
    }

    function chef_details_store(Request $request)
    {
        $chef_image = $request->image;
        $chef_extension = $chef_image->getClientOriginalExtension();
        $file_name = Str::random(5) . rand(100, 999) . '.' . $chef_extension;
        Image::make($chef_image)->save(public_path('uploads/chef/' . $file_name));

        OurChef::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'expertise' => $request->expertise,
            'experience' => $request->experience,
            'email' => $request->email,
            'phone' => $request->phone,
            'fb_url' => $request->fb_url,
            'twtr_url' => $request->twtr_url,
            'insta_url' => $request->insta_url,
            'short_desp' => $request->short_desp,
            'long_desp' => $request->long_desp,
            'skills' => $request->skills,
            'image' => $file_name,
            'slug' => Str::lower(str_replace(' ', '-', $request->name)) . '-' . "touhidul",
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    function all_chef()
    {
        $all_chef = OurChef::all();
        return view('admin.our_chef.all_chef', [
            'all_chef' => $all_chef,
        ]);
    }

    function chef_delete($chef_id)
    {
        $chef_delete = OurChef::where('id', $chef_id)->first()->image;
        $delete_from = public_path('uploads/chef/' . $chef_delete);
        unlink($delete_from);

        OurChef::find($chef_id)->delete();
        return back();
    }

    function chef_percentage()
    {
        return view('admin.our_chef.chef_percentage');
    }

    function percentage_store(Request $request)
    {
        OurchefPercentage::insert([
            'percentage' => $request->percentage,
            'title' => $request->title,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
}