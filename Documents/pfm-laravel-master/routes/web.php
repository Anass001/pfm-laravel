<?php

use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\PropertiesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\FindRoomController;
use App\Http\Controllers\Admin\UsersContoller;
use App\Http\Controllers\User\HomeController;
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

Route::get('/', [\App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
Route::post('/seek',[FindRoomController::class, 'index'] );

Route::group(['middleware' => ['admin']], function () {
    //main - admin
    Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');
    Route::get('/admin/properties', [PropertiesController::class, 'index'])->name('viewProperties');
    Route::get('/admin/properties/create', [PropertiesController::class, 'create'])->name('createProperty');
    Route::post('/admin/properties/edit/{id}', [PropertiesController::class, 'edit'])->name('editProperty');
    Route::post('/admin/properties/delete/{id}', [PropertiesController::class, 'destroy'])->name('deleteProperty');
    Route::post('/admin/properties/update/{id}', [PropertiesController::class, 'update'])->name('updateProperty');
    Route::post('/admin/properties/store', [PropertiesController::class, 'store'])->name('storeProperty');
    //users - admin
    Route::get('/admin/users', [UsersController::class, 'index'])->name('viewUsers');
    Route::post('/admin/users/edit', [UsersController::class, 'edit'])->name('editUser');
    Route::get('/admin/users/delete/{id}', [UsersController::class, 'destroy'])->name('deleteUser');
    Route::get('/admin/users/update/{id}', [UsersController::class, 'update'])->name('updateUser');
    //bookings - admin
    Route::get('/admin/bookings', [BookingsController::class, 'index'])->name('viewBookings');
    Route::get('/admin/bookings/create', [BookingsController::class, 'create'])->name('createBooking');
    Route::post('/admin/bookings/edit', [BookingsController::class, 'edit'])->name('editBooking');
    Route::post('/admin/bookings/delete/{id}', [BookingsController::class, 'destroy'])->name('deleteBooking');
    Route::post('/admin/bookings/update/{id}', [BookingsController::class, 'update'])->name('updateBooking');
    Route::post('/admin/bookings/store', [BookingsController::class, 'store'])->name('storeBooking');
});

//main
Route::post('/results', [FindRoomController::class, 'index'])->name('showResults');

//properties - user
Route::post('/properties/{id}', [\App\Http\Controllers\User\PropertiesController::class, 'show'])->name('viewProperty');
Route::post('/properties/store/{id}', [\App\Http\Controllers\User\PropertiesController::class, 'store'])->name('booking');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/home', [HomeController::class, 'index'])->name('home');
