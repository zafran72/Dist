<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produsen extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'password', 'confirm_password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}