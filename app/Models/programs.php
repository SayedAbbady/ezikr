<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
    protected $fillable = [
        'p_title',
        'p_icon',
        'p_description'
    ];
}
