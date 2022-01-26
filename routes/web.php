<?php

use App\Http\Controllers\User\FindRoomController;
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
Route::get('/', [\App\Http\Controllers\User\HomeController::class, 'index']);
Route::post('/seek', [FindRoomController::class, 'index']);

Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index']);

Route::get('/admin/properties', [\App\Http\Controllers\Admin\PropertiesController::class, 'index']);
Route::post('/admin/properties/create', [\App\Http\Controllers\Admin\PropertiesController::class, 'create']);
Route::post('/admin/properties/edit', [\App\Http\Controllers\Admin\PropertiesController::class, 'edit']);

Route::post('/admin/users', [\App\Http\Controllers\Admin\UsersController::class, 'index']);
Route::post('/admin/users/create', [\App\Http\Controllers\Admin\UsersController::class, 'create']);
Route::post('/admin/users/edit', [\App\Http\Controllers\Admin\UsersController::class, 'edit']);

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

Auth::routes();

Route::get('/home', [\App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
