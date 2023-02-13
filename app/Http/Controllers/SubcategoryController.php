<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    //SUBCATEGORY CODE HERE

    function subcategory(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.categories.subcategory',[
            'categories'=>$categories,
            'subcategories'=>$subcategories,
        ]);
    }

    function subcategory_store(Request $request){
        Subcategory::insert([
            'category_id'=>$request->category,
            'subcategory'=>$request->subcategory,
        ]);
        return back();
    }
}
