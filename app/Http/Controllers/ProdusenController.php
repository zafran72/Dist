<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produsen;

class ProdusenController extends Controller
{

    public function login()
    {
        return view('produsen/login');
    }  

    public function signup()
    {
        return view('produsen/signup');
    }  
	
	public function update()
    {
        return view('produsen/updateStorage');
    } 

    public function create()
    {
        return view('produsen/createStore');
    } 
}
