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

Route::get('/principal', function () { return view('principal'); });
Route::get('/admin', function () { return view('admin.administrador'); });
Route::get('/contactanos', function () { return view('demasvistas.contactanos'); });
Route::get('/devoluciones', function () { return view('devoluciones'); });
Route::get('/envios', function () { return view('demasvistas.envios'); });
Route::get('/ingresar', function () { return view('demasvistas.ingresar'); });
Route::get('/puntosdeentrega', function () { return view('demasvistas.puntosdeentrega'); });
Route::get('/rastreo', function () { return view('demasvistas.rastreo'); });
Route::get('/registrarse', function () { return view('demasvistas.registrarse'); });
Route::get('/sobrenosotros', function () { return view('demasvistas.sobrenosotros'); });


