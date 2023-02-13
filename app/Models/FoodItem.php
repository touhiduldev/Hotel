<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    function rel_to_food_cat(){
        return $this->belongsTo(FoodCategory::class, 'food_cat_id');
    }
}
