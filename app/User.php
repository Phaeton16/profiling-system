<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = ['firstname','middlename', 'lastname','email','password'];
=======
    protected $fillable = [
        'email','password',
    ];
>>>>>>> 785912f7c9b89b312c26737034776706380016e9

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    }
    public function courses()
    {
        return $this->belongsTo('App\Courses');
    }
}
