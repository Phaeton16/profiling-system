<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = ['fname','mname','lname','gender_id','birth_date','student_id_number','course_id','level_id'];
}
