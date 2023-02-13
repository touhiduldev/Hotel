<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psubcategory extends Model
{
    use HasFactory;

    function rel_to_pcategory(){
        return $this->belongsTo(Pcategory::class, 'p_category_id');
    }
}
