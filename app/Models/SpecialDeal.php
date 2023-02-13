<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialDeal extends Model
{
    use HasFactory;

    function rel_to_pcat(){
        return $this->belongsTo(Pcategory::class, 'pcat_id');
    }
}
