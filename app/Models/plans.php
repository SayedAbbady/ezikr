<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class plans extends Model
{
    protected $fillable = [
        'pl_title',
        'pl_money',
        'pl_features'
    ];
}
