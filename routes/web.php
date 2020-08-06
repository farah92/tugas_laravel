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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','HomeController@index');
// Route::get('/','HomeController@table');
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/Register','AuthController@register');
Route::post('/Register/proses', 'AuthController@proses');
Route::get('/data-tables','HomeController@data_tables');
