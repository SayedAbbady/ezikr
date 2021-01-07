<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $fillable = [
        't_name',
        't_jobTitle',
        't_image'
    ];
}
