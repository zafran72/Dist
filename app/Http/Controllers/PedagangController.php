<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Pedagang;
use App\Store;
use App\Storage;

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
            'email' => 'required|email',
            'telepon' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $pedagang = Pedagang::create([
            'username' => $request->username,
            'email' => $request->email,
            'telepon' => $request->telepon,
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
        $datamasuk = Store::all();

        return view('/pedagang/chooseStore', compact('datamasuk'));
    }

    public function chooseAnimal()
    {   
        $datamasuk = Storage::all();

        return view('/pedagang/chooseAnimal', compact('datamasuk'));
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
