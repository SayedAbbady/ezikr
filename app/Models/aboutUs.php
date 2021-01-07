<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aboutUs extends Model
{
    protected $fillable = [
        'a_title',
        'a_description',
        'a_email',
        'a_phone',
        'a_image',
        'a_facebook',
        'a_numOfCourses',
        'a_numOfStudents',
        'a_numOfTeachers',
        'a_numOfSessions'
    ];
}
