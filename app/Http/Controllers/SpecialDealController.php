<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Pcategory;
use App\Models\SpecialDeal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SpecialDealController extends Controller
{

    // BREAKFAST ITEM SECTION START

    function special_deal_items()
    {
        $categories = Pcategory::all();
        return view('admin.gallery.special_deal.special_deal_item', [
            'categories' => $categories,
        ]);
    }

    function special_item_store(Request $request)
    {

        $special_deal_item = $request->image;
        $sp_item_extension = $special_deal_item->getClientOriginalExtension();
        $file_name = Str::random(5) . rand(100, 999) . '.' . $sp_item_extension;
        Image::make($special_deal_item)->save(public_path('uploads/gallery/special_deal/' . $file_name));

        SpecialDeal::insert([
            'title' => $request->title,
            'pcat_id' => $request->pcat_id,
            'short_desp' => $request->short_desp,
            'long_desp' => $request->long_desp,
            'price' => $request->price,
            'image' => $file_name,
            'slug' => Str::lower(str_replace(' ', '-', $request->title)) . '-' . "special-deal",
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    // BREAKFAST ITEM SECTION END

    function special_deal_item_edit($special_id)
    {
        $all_special_items = SpecialDeal::find($special_id);
        $p_categories = Pcategory::all();
        return view('admin.gallery.special_deal.special_item_update.special_item', [
            'all_special_items' => $all_special_items,
            'p_categories' => $p_categories,
        ]);
    }

    // Special ITEM SECTION List

    function special_item_list()
    {
        $special_deal_item = SpecialDeal::all();
        return view('admin.gallery.special_deal.list', [
            'special_deal_item' => $special_deal_item,
        ]);
    }

    function special_item_update(Request $request)
    {

        $special_item = SpecialDeal::where('id', $request->special_id)->first()->image;
        $delete_from = public_path('uploads/gallery/special_deal/' . $special_item);
        unlink($delete_from);

        $sp_item_update = $request->image;
        $sp_item_extension = $sp_item_update->getClientOriginalExtension();
        $file_name = Str::random(5) . rand(100, 999) . '.' . $sp_item_extension;
        Image::make($sp_item_update)->save(public_path('uploads/gallery/special_deal/' . $file_name));

        SpecialDeal::where('id', $request->special_id)->update([
            'title' => $request->title,
            'pcat_id' => $request->pcat_id,
            'short_desp' => $request->short_desp,
            'long_desp' => $request->long_desp,
            'price' => $request->price,
            'image' => $file_name,
        ]);
        return back();
    }

    function special_item_delete($special_id)
    {

        $special_item = SpecialDeal::where('id', $special_id)->first()->image;
        $delete_from = public_path('uploads/gallery/special_deal/' . $special_item);
        unlink($delete_from);

        SpecialDeal::find($special_id)->delete();
        return back();
    }

    // Special deal details

    function special_deal_details($slug_id)
    {
        $special_deal_item = SpecialDeal::where('slug', $slug_id)->get();
        return view('frontend.gallery.special_deal_details', [
            'special_deal_item' => $special_deal_item,
        ]);
    }
}