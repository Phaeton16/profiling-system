<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $table = 'students';
    protected $fillable = '[fname, iname, mname, birth_date, ]';
}
