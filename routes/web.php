<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('storeProfile', function () {
    return view('storeProfile');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('ternakku', function () {
    return view('ternakku');
});

Route::get('login', 'ProdusenController@login');
Route::get('signup', 'ProdusenController@signup');