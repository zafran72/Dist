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
    return view('produsen/storeProfile');
});

Route::get('createStore', function () {
    return view('createStore');
});

Route::get('editStore', function () {
    return view('editStore');
});

Route::get('updateStorage', function () {
    return view('updateStorage');
});

Route::get('chooseStore', function ( ) {
    return view('chooseStore');
});

Route::get('animal', function () {
    return view('animal');
});

Route::get('detail', function () {
    return view('detail');
});

Route::get('ternakku', function () {
    return view('ternakku');
});

Route::get('total', function () {
    return view('total');
});

Route::get('orderSuccess', function () {
    return view('orderSuccess');
});

Route::get('/admin/login', 'AdminController@login');

Route::get('/produsen/login', 'ProdusenController@login');
Route::get('/produsen/signup', 'ProdusenController@signup');

Route::get('/pedagang/login', 'PedagangController@login');
Route::get('/pedagang/signup', 'PedagangController@signup');
