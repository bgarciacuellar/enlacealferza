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

Route::get('/get-cities', [App\Http\Controllers\AirlineController::class, 'getCities']);

Route::get('/get-schedule', [App\Http\Controllers\AirlineController::class, 'getSchedules']);

Route::get('/get-flights', [App\Http\Controllers\AirlineController::class, 'getFlights']);

Route::post('/pre-booking', [App\Http\Controllers\AirlineController::class, 'preBooking']);

Route::get('/get-booking', [App\Http\Controllers\AirlineController::class, 'getBookings']);

Route::post('/cancel-booking', [App\Http\Controllers\AirlineController::class, 'cancelBooking']);

Route::post('/booking', [App\Http\Controllers\AirlineController::class, 'booking']);

Route::get('/get-reservation', [App\Http\Controllers\AirlineController::class, 'getReservation']);

Route::post('/send-email', [App\Http\Controllers\AirlineController::class, 'sendMailAleph']);
