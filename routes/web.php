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

Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('/', [App\Http\Controllers\LoginController::class, 'processLogin'])->name('processLogin');
Route::get('/register', [App\Http\Controllers\RegistrationController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'processRegistration'])->name('processRegistration');

Route::middleware(['auth'])->group(function () {
Route::get('/reservations', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservations');
Route::get('/reserve', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservationForm');
Route::post('/reserve', [App\Http\Controllers\ReservationController::class, 'store'])->name('reserve');
Route::get('/reservation/{id}', [App\Http\Controllers\ReservationController::class, 'show'])->name('viewReservation');
});
