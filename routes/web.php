<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/',[App\Http\Controllers\IndexController::class, 'index']); //
 // Route::get('/', function() {
 //     return "test";
 // }
 // );

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/home', function(){
//     return view('home');
// });

// Route::get('/admin/panel', function(){
//     return view('panel');
// });

// Auth::routes();

// Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

// Auth::routes();

//Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
