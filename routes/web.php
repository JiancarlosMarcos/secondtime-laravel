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

// Route::get('login', function ($name_pg='login') {
//     return view('login');
//  })->name('login');
Route::view('/','home',['name_pg'=>'Home'])->name('home');
Route::view('tienda','tienda',['name_pg'=>'Tienda'])->name('tienda');
Route::view('terminos-y-condiciones','terminos-y-condiciones',['name_pg'=>'Terminos y condiciones'])->name('terminos');
Route::view('login','login',['name_pg'=>'Login'])->name('login');
Route::view('registro','register',['name_pg'=>'Registro'])->name('registro');
Route::view('ayuda/cuanto-pago-por-vender','ayuda/cuanto-pago-por-vender',['name_pg'=>'cuanto-pago-por-vender'])->name('cuanto-pago-por-vender');