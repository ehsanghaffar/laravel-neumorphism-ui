<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'image', 'description', 'rank', 'content', 'meta_description', 'meta_keywords'];
}
