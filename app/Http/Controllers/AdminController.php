<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produsen;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin/login');
    }  

}
