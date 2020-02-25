<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';

    // protected $fillable = 'name';

    public function courses()
    {
        return $thhis->hasOne('App\Students','course_id');
    }



}
