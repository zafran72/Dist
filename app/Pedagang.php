<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pedagang extends Authenticatable
{

    protected $table = 'pedagang';

    protected $fillable = [
        'username', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
