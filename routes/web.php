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

// Route::get('login', function () {
//     return view('login');
// })->name('login');
Route::view('/','home')->name('home');
Route::view('tienda','tienda')->name('tienda');
Route::view('terminos-y-condiciones','terminos-y-condiciones')->name('terminos');
Route::view('login','login')->name('login');
Route::view('registro','register')->name('registro');