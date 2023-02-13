<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodmenu extends Model
{
    use HasFactory;

    function rel_to_food_cat(){
        return $this->belongsTo(FoodCategory::class, 'food_category_id');
    }

    function rel_to_food_item(){
        return $this->belongsTo(FoodItem::class, 'food_item_id');
    }
}
