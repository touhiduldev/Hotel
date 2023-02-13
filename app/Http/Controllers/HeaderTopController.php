<?php

namespace App\Http\Controllers;

use App\Models\HeaderTop;
use App\Models\Logo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class HeaderTopController extends Controller
{
    //HEADER TOP SECTION START

    function header_top(){
        $header_option = HeaderTop::all();
        return view('admin.header.header_top',[
            'header_option'=>$header_option,
        ]);
    }

    function email_opening_hours(Request $request){
        HeaderTop::insert([
            'email'=>$request->email,
            'opening_hours'=>$request->opening_hours,
        ]);
        return back();
    }

    function header_top_delete($header_id){
        HeaderTop::find($header_id)->delete();
        return back();
    }

// LOGO SECTION START

    function logo(){
        $logos = Logo::all();
        return view('admin.header.logo',[
            'logos'=>$logos,
        ]);
    }

// LOGO INSERT SECTION HERE

    function logo_store(Request $request){
        $logo = $request->logo;
        $extension = $logo->getClientOriginalExtension();
        $file_name = Str::random(5).rand(100, 999).'.'.$extension;
        $img = Image::make($logo)->save(public_path('uploads/logos/'.$file_name));

        Logo::insert([
            'logo'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

// LOGO DELETE SECTION

    function logo_delete($logo_id){
        $logo = Logo::where('id', $logo_id)->first()->logo;
        $delete_from = public_path('uploads/logos/'.$logo);
        unlink($delete_from);

        Logo::find($logo_id)->delete();
        return back();
    }

// LOGO EDIT VIEW SECTION

    function logo_edit($logo_id){
        $logos = Logo::find($logo_id);
        return view('admin.header.logo_edit',[
            'logos'=>$logos,
        ]);
    }

// LOGO UPDATE SECTION

    function logo_update(Request $request){
        $logo = Logo::where('id', $request->logo_id)->first()->logo;
        $delete_from = public_path('uploads/logos/'.$logo);
        unlink($delete_from);

        $logo = $request->logo;
        $extension = $logo->getClientOriginalExtension();
        $file_name = Str::random(5).rand(100, 999).'.'.$extension;
        $img = Image::make($logo)->save(public_path('uploads/logos/'.$file_name));

        Logo::where('id', $request->logo_id)->update([
            'logo'=>$file_name,
        ]);
        return back();
    }

// LOGO SECTION end
}
