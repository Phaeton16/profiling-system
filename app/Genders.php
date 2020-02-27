<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    protected $table = 'genders';
    
    public function Genders()
    {
        return $this->hasOne('App\User' ,'id');
    }

}
