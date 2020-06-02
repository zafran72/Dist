<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Storage;

class StorageController extends Controller
{
    public function index()
    {
        return view('produsen.updateStorage');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'animal' => 'required',
            'price' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'image' => 'required',
        ]);
        $show = Storage::create($validatedData);
   
        return redirect('/produsen/detail')->with('success', 'Store is successfully created');
    }
}
