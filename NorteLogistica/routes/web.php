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

Route::get('/', function () { return view('principal'); });
Route::get('/admin', function () { return view('admin.administrador'); });



Route::get('/contacto', function () {return view('contacto');});
Route::get('/envios', function () {return view('envios');});
Route::get('/puntos-entrega', function () {return view('puntos-entrega');});
Route::get('/rastreo', function () {return view('rastreo');});
Route::get('/nosotros', function () {return view('nosotros');});
Route::get('/login', function () {return view('login');});

