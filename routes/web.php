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

Route::get('/about', function () {
    return view('about');
});

Route::get('/produsen/details', function () {
    return view('/produsen/details');
});

Route::get('/pedagang/chooseTernak', function () {
    return view('/pedagang/chooseTernak');
});

Route::get('/admin/login', 'AdminController@login');

Route::get('/produsen/login', 'ProdusenController@login');
Route::get('/produsen/signup', 'ProdusenController@signup');

Route::get('/pedagang/login', 'PedagangController@login')->name('pedaganglogin');
Route::post('/pedagang/login', 'PedagangController@doLogin')->name('pedaganglogin');
Route::get('/pedagang/logout', 'PedagangController@destroy')->name('pedaganglogout');
Route::get('/pedagang/signup', 'PedagangController@signup')->name('pedagangsignup');
Route::post('/pedagang/signup', 'PedagangController@doSignUp')->name('pedagangsignup');
Route::get('/pedagang/chooseStore', 'PedagangController@chooseStore')->name('choosestore');
Route::post('/pedagang/tambahPedagang', 'PedagangController@tambahPedagang');