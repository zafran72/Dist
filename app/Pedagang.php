<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pedagang extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'password', 'confirm_password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
