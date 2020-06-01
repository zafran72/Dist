<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Pedagang;

class PedagangController extends Controller
{

    public function login()
    {
        return view('/pedagang/login');
    }  

    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('pedagang')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect(route('choosestore'));
        } else {
            return redirect()->back();
        }
    }

    public function signup()
    {
        return view('/pedagang/signup');
    }  

    public function doSignUp(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:pedagang|max:225',
            'password' => 'required|confirmed',
        ]);

        $pedagang = Pedagang::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        if ($pedagang) {
            return redirect(route('pedaganglogin'));
        } else {
            return redirect()->back();
        }
    }

    public function chooseStore()
    {
        return view('/pedagang/chooseStore');
    }

    public function chooseAnimal()
    {
        return view('/pedagang/chooseAnimal');
    }

    public function chooseTernak()
    {
        return view('/pedagang/chooseTernak');
    }

    public function total()
    {
        return view('/pedagang/total');
    }

    public function success()
    {
        return view('/pedagang/orderSuccess');
    }

    public function tambahPedagang(Request $request)
    {
        DB::table('pedagang')->insert([
            'username' => $request->username,
            'password' => $request->password
        ]);
        return redirect('/pedagang/chooseStore');
    }

    public function destroy()
    {
        Auth::logout();
        
        return redirect(route('pedaganglogin'));
    }
}
