<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogStore extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_blog_cate(){
        return $this->belongsTo(Blog::class, 'blog_category_id');
    }
}
