<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    function category(){
        $categories = Category::all();
        return view('admin.categories.category',[
            'categories'=>$categories,
        ]);
    }

    function category_store(Request $request){
        Category::insert([
            'category'=>$request->category,
        ]);
        return back()->with('added', 'Category added successfully!');
    }

    //CATEGORY DELETE HERE

    function category_delete($category_id){
        Category::find($category_id)->delete();
        return back();
    }

}
