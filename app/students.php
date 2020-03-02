<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = ['fname','mname','lname','gender_id','birth_date','student_id_number','course_id','level_id','address_id'];

    
    public function getGender()
    {
        return $this->belongsTo('App\Gender','gender_id','id');
    }
    public function getCourses()
    {
        return $this->belongsTo('App\Courses', 'course_id','id');
    }
    public function getLevels()
    {
        return $this->belongsTo('App\Level','level_id','id');
    }
    public function getAddress()
    {
        return $this->hasOne('App\Address','id','address_id');
    }
}
