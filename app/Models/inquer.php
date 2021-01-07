<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inquer extends Model
{
    protected $fillable = [
        'i_firstName',
        'i_LastName',
        'i_email',
        'i_phone',
        'i_key',
        'i_country',
        'seen',
        'i_comment'
    ];
}
