<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'password', 'confirm_password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
