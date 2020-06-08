<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produsen;
use App\Store;
use App\Storage;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class ProdusenController extends Controller
{

    public function login()
    {
        return view('produsen.login');
    }  

    public function signup()
    {
        return view('produsen.signup');
    }  
    
    public function profile()
    {
        $datamasuk = Store::all();

        return view('produsen.storeProfile', compact('datamasuk'));
    }

    public function detail()
    {
        $datamasuk = Storage::all();

        return view('produsen.details', compact('datamasuk'));
    }

    public function singupStore()
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        
        $produsen = Produsen::create(request(['username', 'email', 'telepon', 'password']));
        
        auth()->login($produsen);
        
        return redirect()->to('produsen/store');
    }

    public function loginstore(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('username', 'password');
        if (Auth::guard('produsen')->attempt($credentials)) {
            // Authentication passed...

        if (Auth::guard('produsen')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended('produsen/storeProfile');
        } else {
            return redirect()->back();
            return redirect()->intended('produsen/storeProfile');
        }
        return Redirect::to("produsen/login");
    }
}
