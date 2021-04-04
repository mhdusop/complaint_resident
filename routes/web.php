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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('home');
=======

// Route::get('/', function () {
//     return view('welcome');
>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0
// });

Auth::routes();

<<<<<<< HEAD

Route::get('/', 'HomeController@index')->name('home');

//user
Route::resource('/pengguna', 'UserController');

//petugas
Route::resource('/pengaduan', 'ComplaintController');
=======
Route::get('/', 'HomeController@index')->name('home');

// user
Route::resource('/pengguna', 'UserController');;

// pengaduan
Route::resource('/complaints', 'ComplaintController');

>>>>>>> 652ea1962c9ac6f77fd71446ffabd1d0585bc9b0

