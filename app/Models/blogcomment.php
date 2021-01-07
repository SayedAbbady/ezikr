<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blogcomment extends Model
{
    protected $fillable = [
        'blogs_id',
        'co_name',
        'co_image',
        'co_email',
        'co_text',
        'co_phone'
    ];

    public function article(){
        return $this->belongsTo('App\Models\blog');
    }
}
