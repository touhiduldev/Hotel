<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    function rel_to_pcat(){
        return $this->belongsTo(Pcategory::class, 'pcat_id');
    }
    function rel_to_psubcat(){
        return $this->belongsTo(Psubcategory::class, 'psubcat_id');
    }
}
