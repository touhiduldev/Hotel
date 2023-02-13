<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    function discount(){
        $all_discount = Discount::all();
        return view('admin.discount.discount',[
            'all_discount'=>$all_discount,
        ]);
    }

    function discount_store(Request $request){
        Discount::insert([
            'title'=>$request->title,
            'heading'=>$request->heading,
            'btn_text'=>$request->btn_text,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function delete_discount($discount_id){
        Discount::find($discount_id)->delete();
        return back();
    }
}
