<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteControlador;
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
    return view('clientes');
});
    

Route::get('/novo','App\Http\Controllers\ClienteControlador@create');
Route::get('/','App\Http\Controllers\ClienteControlador@index');
//Route::get('/','App\Http\Controllers\ClienteControlador@store');

 



