<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    protected $fillable = [
        'h_logo',
        'h_icon',
        'h_title',
        'h_description',
        'h_background',
        'h_seoKeywords',
        'h_seoDescription'
    ];
}
