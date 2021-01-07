<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    protected $table = 'visitors';
    protected $fillable = [
        'ipaddress',
        'month',
        'day',
        'year',
    ];
}
