<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = ['title', 'image', 'description', 'rank', 'client', 'link', 'completion_date', 'content', 'meta_keywords', 'meta_description'];
}
