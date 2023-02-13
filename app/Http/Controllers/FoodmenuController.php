<?php

namespace App\Http\Controllers;

use App\Models\BookingType;
use App\Models\Foodmenu;
use App\Models\FoodCategory;
use App\Models\FoodItem;
use App\Models\NumberPerson;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FoodmenuController extends Controller
{

// FOOD CATEGORY SECTION

    function food_menu_category(){
        $all_categories = FoodCategory::all();
        return view('admin.food.food_category',[
            'all_categories'=>$all_categories,
        ]);
    }

    function food_category_store(Request $request){
        FoodCategory::insert([
            'food_category'=>$request->food_category,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

// PERSON AND BOOKING TYPE

    function person_booking_type(){
        $all_persons = NumberPerson::all();
        $all_bookings = BookingType::all();
        return view('admin.food.person_booking_type',[
            'all_persons'=>$all_persons,
            'all_bookings'=>$all_bookings,
        ]);
    }

    function number_booking_store(Request $request){
        if ($request->btn == 1) {
            NumberPerson::insert([
                'number_person'=>$request->number_person,
                'created_at'=>Carbon::now(),
            ]);
            return back();
        }else {
            BookingType::insert([
                'booking_type'=>$request->booking_type,
                'created_at'=>Carbon::now(),
            ]);
            return back();
        }
    }

    function person_delete($person_id){
        NumberPerson::find($person_id)->delete();
        return back();
    }

    function booking_delete($booking_id){
        BookingType::find($booking_id)->delete();
        return back();
    }

// PERSON AND BOOKING TYPE SECTION END

// FOOD ITEM SECTION

    function food_item(){
        $all_categories = FoodCategory::all();
        $all_food_items = FoodItem::all();
        return view('admin.food.food_item',[
            'all_categories'=>$all_categories,
            'all_food_items'=>$all_food_items,
        ]);
    }

    function getfood_category(Request $request){
        $food_items = FoodItem::where('food_cat_id', $request->food_category)->get();

        $str = '';

        foreach ($food_items as $item) {
            $str .='<option value="'.$item->id.'">'.$item->food_item.'</option>';
        }
        echo $str;
    }

    function item_store(Request $request){
        FoodItem::insert([
            'food_cat_id'=>$request->food_category,
            'food_item'=>$request->food_item,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function item_edit($item_id){
        $all_categories = FoodCategory::all();
        $all_food_items = FoodItem::find($item_id);
        return view('admin.food.item_edit',[
            'all_categories'=>$all_categories,
            'all_food_items'=>$all_food_items,
        ]);
    }

    function item_update(Request $request){
        FoodItem::where('id', $request->item_id)->update([
            'food_cat_id'=>$request->food_category,
            'food_item'=>$request->food_item,
        ]);
        return redirect()->route('food.item');
    }

    function item_delete($item_id){
        FoodItem::find($item_id)->delete();
        return back();
    }



    function food_menu(){
        $food_categories = FoodCategory::all();
        $all_food_items = FoodItem::all();
        $all_persons = NumberPerson::all();
        $all_bookings = BookingType::all();
        return view('admin.food.food_menu',[
            'food_categories'=>$food_categories,
            'all_food_items'=>$all_food_items,
            'all_persons'=>$all_persons,
            'all_bookings'=>$all_bookings,
        ]);
    }

    function food_menu_store(Request $request){
        Foodmenu::insert([
            'food_category_id'=>$request->food_category_id,
            'food_item_id'=>$request->food_item_id,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'after_discount'=>$request->price - ($request->price*$request->discount/100),
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }

    function menu_list(){
        $food_menus = Foodmenu::all();
        return view('admin.food.menu_list',[
            'food_menus'=>$food_menus,
        ]);
    }
}
