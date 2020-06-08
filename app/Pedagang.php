<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pedagang extends Authenticatable
{

    protected $table = 'pedagang';

    protected $fillable = [
        'username', 'email', 'telepon', 'password' 
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
