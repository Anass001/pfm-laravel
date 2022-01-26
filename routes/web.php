<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
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
Route::get('/', [IndexController::class, 'index']);
Route::post('/seek',[IndexController::class, 'seek'] );

Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index']); //

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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
