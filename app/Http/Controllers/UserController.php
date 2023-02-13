<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function user_profile(){
        return view('admin.user.user');
    }

    function profile_update(Request $request){
        $image = Auth::user()->image;
        if ($image == null) {
            $profile_image = $request->photo;
            $extension = $profile_image->GetClientOriginalExtension();
            $file_name = Str::random(5).rand(100,999).'.'.$extension;
            $img = Image::make($profile_image)->save(public_path('uploads/profile/'.$file_name));

            User::find(Auth::id())->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'photo'=>$file_name,
            ]);
            return back()->with('updated', 'User Profile Update Successfully!');
        }else{
            $delete_from = public_path('uploads/profile/'.$image);
            unlink($delete_from);

            $profile_img = $request->photo;
            $extension = $profile_img->GetClientOriginalExtension();
            $file_nm = Str::random(5).rand(100,999).'.'.$extension;
            $img = Image::make($profile_img)->save(public_path('uploads/profile/'.$file_nm));

            User::find(Auth::id())->update([
                'photo'=>$file_nm,
            ]);
            return back()->with('updated', 'User Profile Update Successfully!');
        }

    }


    function user_list(){
        $all_users = User::where('id', '!=', Auth::id())->get();
        $count = User::count();
        return view('admin.user.user_list',[
            'all_users'=>$all_users,
            'count'=>$count,
        ]);
    }

    function user_delete($user_id){
        User::find($user_id)->delete();
        return back()->with('deleted', 'User deleted successfully!');
    }

// PASSWORD UPDATE CODE HERE

    function password_update(Request $request){
        $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|min:8|max:10|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'password_confirmation'=>'required',
       ]);

       if (Hash::check($request->current_password, Auth::user()->password)) {
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->new_password),
        ]);
            return back()->with('success', 'Password has been successfully updated!');
        }else {
            return back()->with('wrong', 'Current password is invalid!');
        }


    }


}
