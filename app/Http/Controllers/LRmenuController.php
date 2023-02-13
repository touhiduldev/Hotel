<?php

namespace App\Http\Controllers;

use App\Models\LeftMenu;
use App\Models\RightMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class LRmenuController extends Controller
{
    function lr_menu(){
        return view('admin.menus.lr_menu');
    }

    function lrmenu_store(Request $request){
        if ($request->btn == 1) {

            $menu_img = $request->menu_img;
            $extension = $menu_img->getClientOriginalExtension();
            $file_name = Str::random(5).rand(100, 999).'.'.$extension;
            Image::make($menu_img)->save('uploads/lr_menu/left_menu/'.$file_name);


            LeftMenu::insert([
                'title'=>$request->title,
                'desp'=>$request->short_desp,
                'price'=>$request->price,
                'image'=>$file_name,
            ]);
            return back();
        }else{

            $menu_img = $request->menu_img;
            $extension = $menu_img->getClientOriginalExtension();
            $file_name = Str::random(5).rand(100, 999).'.'.$extension;
            Image::make($menu_img)->save('uploads/lr_menu/right_menu/'.$file_name);

            RightMenu::insert([
                'title'=>$request->title,
                'desp'=>$request->short_desp,
                'price'=>$request->price,
                'image'=>$file_name,
            ]);
            return back();
        }
    }

    function weekly_menu_list(){
        $left_menus = LeftMenu::all();
        $right_menus = RightMenu::all();
        return view('admin.menus.weekly_menu_list',[
            'left_menus'=>$left_menus,
            'right_menus'=>$right_menus,
        ]);
    }

    function lmenu_edit($lmenu_id){

        $left_menus = LeftMenu::find($lmenu_id);
        return view('admin.menus.lmenu_edit',[
            'left_menus'=>$left_menus,
        ]);
    }

    function lmenu_update(Request $request){
        LeftMenu::find($request->lmenu_id)->update([
            'title'=>$request->title,
            'desp'=>$request->short_desp,
            'price'=>$request->price,
        ]);
        return back();
    }

    function rmenu_edit($rmenu_id){
        $right_menus = RightMenu::find($rmenu_id);
        return view('admin.menus.rmenu_edit',[
            'right_menus'=>$right_menus,
        ]);
    }

    function rmenu_update(Request $request){
        RightMenu::find($request->rmenu_id)->update([
            'title'=>$request->title,
            'desp'=>$request->short_desp,
            'price'=>$request->price,
        ]);
        return back();
    }

    function lmenu_delete($lmenu_id){

        $left_menu_img = LeftMenu::where('id', $lmenu_id)->first()->image;
        $delete_from = public_path('uploads/lr_menu/left_menu/'.$left_menu_img);
        unlink($delete_from);

        LeftMenu::find($lmenu_id)->delete();
        return back();
    }
    function rmenu_delete($rmenu_id){

        $right_menu_img = LeftMenu::where('id', $rmenu_id)->first()->image;
        $delete_from = public_path('uploads/lr_menu/right_menu/'.$right_menu_img);
        unlink($delete_from);

        RightMenu::find($rmenu_id)->delete();
        return back();
    }




}
