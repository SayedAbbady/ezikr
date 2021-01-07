<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'blogs_tilte',
        'blogs_image',
        'blogs_text',
        'blogs_slug',
    ];

    public function comments(){
        return $this->hasMany('App\Models\blogcomment');
    }
}
