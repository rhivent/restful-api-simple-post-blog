<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // mass assignment
    protected $fillable = [
        'title', 'slug', 'featured_img', 'user_id'
    ];
}
