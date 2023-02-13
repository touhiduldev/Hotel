<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogStore;
use App\Models\HeadingTitle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{

// BLOG SECTION CODE HERE

    function heading(){
        $heading_title = HeadingTitle::all();
        return view('admin.blog.heading',[
            'heading_title'=>$heading_title,
        ]);
    }

    function heading_title_store(Request $request){
        HeadingTitle::insert([
            'title'=>$request->title,
            'heading'=>$request->heading,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function head_title_delete($head_id){
        HeadingTitle::find($head_id)->delete();
        return back();
    }

// BLOG CATEGORY CODE HERE

    function blog_category(){
        $blog_categories = Blog::all();
        return view('admin.blog.blog_category',[
            'blog_categories'=>$blog_categories,
        ]);
    }

    function blog_category_store(Request $request){
        Blog::insert([
            'blog_category'=>$request->blog_category,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function b_cat_delete($blog_category_id){
        Blog::find($blog_category_id)->delete();
        return back();
    }

// BLOG POST SECTION HERE

    function blog(){
        $blog_categories = Blog::all();
        return view('admin.blog.new_blog_post',[
            'blog_categories'=>$blog_categories,
        ]);
    }

    function blog_store(Request $request){

        $short_image = $request->short_img;
        $short_extension = $short_image->getClientOriginalExtension();
        $short_image_name = Str::random(5).rand(100, 999).'.'.$short_extension;
        Image::make($short_image)->save(public_path('uploads/blog/'.$short_image_name));

        $long_image = $request->long_img;
        $long_extension = $long_image->getClientOriginalExtension();
        $long_image_name = Str::random(5).rand(100, 999).'.'.$long_extension;
        Image::make($long_image)->save(public_path('uploads/blog/'.$long_image_name));

        BlogStore::insert([
            'blog_category_id'=>$request->blog_category_id,
            'today_date'=>$request->today_date,
            'month_name'=>$request->month_name,
            'blog_title'=>$request->blog_title,
            'short_text'=>$request->short_text,
            'desp'=>$request->desp,
            'short_img'=>$short_image_name,
            'long_img'=>$long_image_name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

// BLOG LIST EDIT AND DELETE SECTION

    function all_blogs(){
        $all_blogs = BlogStore::all();
        return view('admin.blog.all_blog',[
            'all_blogs'=>$all_blogs,
        ]);
    }

    function blog_edit($blog_id){
        $all_blogs = BlogStore::find($blog_id);
        $all_blog_category = Blog::all();
        return view('admin.blog.edit_blog',[
            'all_blogs'=>$all_blogs,
            'all_blog_category'=>$all_blog_category,
        ]);
    }

    function blog_update(Request $request){

        if ($request->short_img == '') {

            $long_img = BlogStore::where('id', $request->blog_id)->first()->long_img;
            $delete_long_img = public_path('uploads/blog/'.$long_img);
            unlink($delete_long_img);

            $long_image = $request->long_img;
            $long_extension = $long_image->getClientOriginalExtension();
            $long_image_name = Str::random(5).rand(100, 999).'.'.$long_extension;
            Image::make($long_image)->save(public_path('uploads/blog/'.$long_image_name));

            BlogStore::find($request->blog_id)->update([
                'blog_category_id'=>$request->blog_category_id,
                'today_date'=>$request->today_date,
                'month_name'=>$request->month_name,
                'blog_title'=>$request->blog_title,
                'short_text'=>$request->short_text,
                'desp'=>$request->desp,
                'long_img'=>$long_image_name,
            ]);
            return back();

        }elseif($request->long_img == ''){

            $short_img = BlogStore::where('id', $request->blog_id)->first()->short_img;
            $delete_from = public_path('uploads/blog/'.$short_img);
            unlink($delete_from);

            $short_image = $request->short_img;
            $short_extension = $short_image->getClientOriginalExtension();
            $short_image_name = Str::random(5).rand(100, 999).'.'.$short_extension;
            Image::make($short_image)->save(public_path('uploads/blog/'.$short_image_name));

            BlogStore::find($request->blog_id)->update([
                'blog_category_id'=>$request->blog_category_id,
                'today_date'=>$request->today_date,
                'month_name'=>$request->month_name,
                'blog_title'=>$request->blog_title,
                'short_text'=>$request->short_text,
                'desp'=>$request->desp,
                'short_img'=>$short_image_name,
            ]);
            return back();
        }else {
            $short_img = BlogStore::where('id', $request->blog_id)->first()->short_img;
            $delete_from = public_path('uploads/blog/'.$short_img);
            unlink($delete_from);

            $long_img = BlogStore::where('id', $request->blog_id)->first()->long_img;
            $delete_long_img = public_path('uploads/blog/'.$long_img);
            unlink($delete_long_img);

            $short_image = $request->short_img;
            $short_extension = $short_image->getClientOriginalExtension();
            $short_image_name = Str::random(5).rand(100, 999).'.'.$short_extension;
            Image::make($short_image)->save(public_path('uploads/blog/'.$short_image_name));

            $long_image = $request->long_img;
            $long_extension = $long_image->getClientOriginalExtension();
            $long_image_name = Str::random(5).rand(100, 999).'.'.$long_extension;
            Image::make($long_image)->save(public_path('uploads/blog/'.$long_image_name));

            BlogStore::find($request->blog_id)->update([
                'blog_category_id'=>$request->blog_category_id,
                'today_date'=>$request->today_date,
                'month_name'=>$request->month_name,
                'blog_title'=>$request->blog_title,
                'short_text'=>$request->short_text,
                'desp'=>$request->desp,
                'short_img'=>$short_image_name,
                'long_img'=>$long_image_name,
            ]);
            return back();
        }
    }

    function blog_delete($blog_id){

        $short_img = BlogStore::where('id', $blog_id)->first()->short_img;
        $dlt_shrt_img = public_path('uploads/blog/'.$short_img);
        unlink($dlt_shrt_img);

        $long_img = BlogStore::where('id', $blog_id)->first()->long_img;
        $dlt_long_img = public_path('uploads/blog/'.$long_img);
        unlink($dlt_long_img);

        BlogStore::find($blog_id)->delete();
        return back();
    }


}


