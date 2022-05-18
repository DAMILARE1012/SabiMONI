<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'author', 'title', 'description', 'image', 'published', 'unpublished'
    ];
}
 