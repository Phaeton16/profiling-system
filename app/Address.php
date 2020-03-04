<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected  $fillable = ['students_id', 'purok', 'barangay', 'city', 'town', 'province', 'country'];
}
