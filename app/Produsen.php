<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produsen extends Model
{
    protected $fillable = ['store_name', 'address', 'phone_number', 'image'];
}