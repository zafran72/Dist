<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produsen;

class ProdusenController extends Controller
{

    public function login()
    {
        return view('login');
    }  

    public function signup()
    {
        return view('signup');
    }  
}
