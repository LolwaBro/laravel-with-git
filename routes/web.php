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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
	return view('index');
});


Route::post('/login', 'App\Http\Controllers\UserRegisterAndLogin@login');


Route::group(['middleware' => ['UserAuth']], function () {
	Route::view('/home', 'home');
});


Route::post('/logout','App\Http\Controllers\UserRegisterAndLogin@logout');
