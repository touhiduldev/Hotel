<?php

namespace App\Http\Controllers;

use App\Models\BookanTable;
use App\Models\FoodItem;
use Illuminate\Http\Request;

class BookanTableController extends Controller
{

    function book_table_store(Request $request){
        BookanTable::insert([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'booking_date'=>$request->booking_date,
            'booking_time'=>$request->booking_time,
            'perferred_menu_id'=>$request->perferred_menu_id,
            'food_item_id'=>$request->food_item_id,
            'number_person_id'=>$request->number_person_id,
            'booking_type_id'=>$request->booking_type_id,
            'message'=>$request->message,
        ]);
    }

}
