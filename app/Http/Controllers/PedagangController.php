<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produsen;

class PedagangController extends Controller
{

    public function login()
    {
        return view('pedagang/login');
    }  

    public function signup()
    {
        return view('pedagang/signup');
    }  
}
