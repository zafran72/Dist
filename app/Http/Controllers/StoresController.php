<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
    public function index()
    {
        return view('produsen.createStore');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'store_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'image' => 'required',
        ]);
        $show = Store::create($validatedData);
   
        return redirect('/produsen/storeProfile')->with('success', 'Store is successfully created');
    }

    public function edit($id)
    {
        $datamasuk = Store::findOrFail($id);

        return view('produsen.editStore', compact('datamasuk'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'store_name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'image' => 'required',
        ]);
        Store::whereId($id)->update($validatedData);

        return redirect('/produsen/storeProfile')->with('success', 'Store is successfully updated');
    }

    public function destroy($id)
    {
        $datamasuk = Store::findOrFail($id);
        $datamasuk->delete();

        return redirect('/produsen/store')->with('success', 'Store is successfully deleted');
    }
}

