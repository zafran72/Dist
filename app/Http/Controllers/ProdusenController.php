<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Produsen;
use App\Store;
use App\Storage;
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

    public function singupStore(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);

        $produsen = Produsen::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        if ($produsen) {
            return redirect(route('produsenlogin'));
        } else {
            return redirect()->back();
        }
    }

    public function loginstore(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('produsen')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect(route('storeprofile'));
        } else {
            return redirect()->back();
        }
    }
}
