<?php

use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\PropertiesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\FindRoomController;
use App\Http\Controllers\User\HomeController;
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

//main
Route::get('/', [HomeController::class, 'index'])->name('userIndex');
Route::post('/results', [FindRoomController::class, 'index'])->name('showResults');
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index']);

//properties - admin
Route::get('/admin/properties', [PropertiesController::class, 'index'])->name('viewProperties');
Route::get('/admin/properties/create', [PropertiesController::class, 'create'])->name('createProperty');
Route::post('/admin/properties/edit/{id}', [PropertiesController::class, 'edit'])->name('editProperty');
Route::post('/admin/properties/delete/{id}', [PropertiesController::class, 'destroy'])->name('deleteProperty');
Route::post('/admin/properties/update/{id}', [PropertiesController::class, 'update'])->name('updateProperty');
Route::post('/admin/properties/store', [PropertiesController::class, 'store'])->name('storeProperty');

//properties - user
Route::post('/properties/{id}', [\App\Http\Controllers\User\PropertiesController::class, 'show'])->name('viewProperty');

//users
Route::get('/admin/users', [UsersController::class, 'index'])->name('viewUsers');
Route::post('/admin/users/edit', [UsersController::class, 'edit'])->name('editUser');
Route::post('/admin/users/delete{id}', [UsersController::class, 'destroy'])->name('deleteUser');
Route::post('/admin/users/update/{id}', [UsersController::class, 'update'])->name('updateUser');

//bookings
Route::get('/admin/bookings', [BookingsController::class, 'index'])->name('viewBookings');;
Route::get('/admin/bookings/create', [BookingsController::class, 'create'])->name('createBooking');;
Route::post('/admin/bookings/edit', [BookingsController::class, 'edit'])->name('editBooking');;
Route::post('/admin/bookings/delete/{id}', [BookingsController::class, 'destroy'])->name('deleteBooking');;
Route::post('/admin/bookings/update/{id}', [BookingsController::class, 'update'])->name('updateBooking');;
Route::post('/admin/bookings/store', [BookingsController::class, 'store'])->name('storeBooking');;


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
