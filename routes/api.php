<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;

// Routes for Flights
Route::get('/flights', [FlightController::class, 'index']);
Route::post('/flights', [FlightController::class, 'store']);
Route::get('/flights/{id}', [FlightController::class, 'show']);

// Routes for Bookings
Route::post('/bookings', [BookingController::class, 'store']);
Route::get('/bookings/flight/{flightId}', [BookingController::class, 'showByFlight']);
