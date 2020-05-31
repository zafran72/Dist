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

Route::get('animal', function () {
    return view('produsen/animal');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('ternakku', function () {
    return view('ternakku');
});

Route::get('/admin/login', 'AdminController@login');

Route::get('/produsen/login', 'ProdusenController@login');
Route::get('/produsen/signup', 'ProdusenController@signup');

Route::get('/pedagang/login', 'PedagangController@login');
Route::get('/pedagang/signup', 'PedagangController@signup');
