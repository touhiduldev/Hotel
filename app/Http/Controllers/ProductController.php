<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pcategory;
use App\Models\Product;
use App\Models\Psubcategory;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

// PRODUCT CATEGORY START
    function p_category(){
        $p_categories = Pcategory::all();
        return view('admin.product.p_category',[
            'p_categories'=>$p_categories,
        ]);
    }

    function pcategory_store(Request $request){
        Pcategory::insert([
            'p_category'=>$request->p_category,
        ]);
        return back()->with('added', 'Category added successfully!');
    }

    function pcategory_delete($pcategory_id){
        Pcategory::find($pcategory_id)->delete();
        return back();
    }
// PRODUCT CATEGORY END

// PRODUCT SUBCATEGORY START

    function p_subcategory(){
        $p_categories = Pcategory::all();
        $p_subcategories = Psubcategory::all();
        return view('admin.product.p_subcategory',[
            'p_categories'=>$p_categories,
            'p_subcategories'=>$p_subcategories,
        ]);
    }

    function p_subcategory_store(Request $request){
        Psubcategory::insert([
            'p_category_id'=>$request->p_category,
            'p_subcategory'=>$request->p_subcategory,
        ]);
        return back()->with('added', 'Category added successfully!');
    }

    function p_subcategory_delete($psubcategory_id){
        Psubcategory::find($psubcategory_id)->delete();
        return back();
    }

// PRODUCT SUBCATEGORY END

// PRODUCT SECTION START

    function product(){
        $categories = Category::all();
        $p_categories = Pcategory::all();
        return view('admin.product.add_product',[
            'categories'=>$categories,
            'p_categories'=>$p_categories,
        ]);
    }

    function getsubcategory(Request $request){
        $subcategories = Subcategory::where('category_id', $request->category_id)->get();

        $str = '';

        foreach ($subcategories as $subcategory) {
            $str .='<option value="'.$subcategory->id.'">'.$subcategory->subcategory.'</option>';
        }

        echo $str;
    }

    function getpsubcategory(Request $request){
        $p_subcategories = Psubcategory::where('p_category_id',$request->p_subcategory_id)->get();

        $str = '';

        foreach ($p_subcategories as $p_subcategory) {
            $str .='<option value="'.$p_subcategory->id.'">'.$p_subcategory->p_subcategory.'</option>';
        }

        echo $str;
    }

    function product_store(Request $request){

        $product_image = $request->image;
        $extension = $product_image->getClientOriginalExtension();
        $file_name = Str::random(5).rand(100, 999).'.'.$extension;
        $img = Image::make($product_image)->save(public_path('uploads/product/'.$file_name));


        Product::insert([
            'pcat_id'=>$request->pcat_id,
            'psubcat_id'=>$request->psubcat_id,
            'title'=>$request->title,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'after_discount'=>$request->price - ($request->price*$request->discount/100),
            'short_desp'=>$request->short_desp,
            'long_desp'=>$request->desp,
            'image'=>$file_name,
            'slug'=>Str::lower(str_replace(' ', '-', $request->title)).'-'.rand(0, 1000000000),
        ]);

        return back();
    }

    function product_list(){
        $products = Product::all();
        $trashed_products = Product::onlyTrashed()->get();
        return view('admin.product.product_list',[
            'products'=>$products,
            'trashed_products'=>$trashed_products,
        ]);
    }

    function product_delete($product_id){
        Product::find($product_id)->delete();
        return back();
    }

    function restore($restore_id){
        Product::onlyTrashed()->find($restore_id)->restore();
        return back();
    }

    function delete_trashed($dlt_trashed){

        $product_img = Product::onlyTrashed()->where('id', $dlt_trashed)->first()->image;
        $delete_from = public_path('uploads/product/'.$product_img);
        unlink($delete_from);

        Product::onlyTrashed()->find($dlt_trashed)->forceDelete();
        return back();

    }


// PRODUCT SECTION END
}
