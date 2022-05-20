<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-bus-details/{tour_id}', [App\Http\Controllers\ReservationController::class, 'getBusByTourId'])->name('getBusByTourId');
Route::get('/get-stations/{tour_id}', [App\Http\Controllers\ReservationController::class, 'getStationsByTourId'])->name('getStationsByTourId');
Route::get('/get-remaining-stations/{tour_id}/{station_id}', [App\Http\Controllers\ReservationController::class, 'getStationsRemainingByTourId'])->name('getStationsRemainingByTourId');
