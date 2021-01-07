<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $fillable = [
        'cl_image',
        'cl_name',
        'cl_message',
        'cl_background'
    ];
}
