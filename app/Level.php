<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    public function Level()
    {
        return $this->hasOne('App\Students','level_id');
    }
}
