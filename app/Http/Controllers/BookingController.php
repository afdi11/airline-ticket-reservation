<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Store a new booking
    public function store(Request $request)
    {
        $booking = Booking::create($request->all());
        return response()->json($booking, 201);
    }

    // Retrieve bookings by flight
    public function showByFlight($flightId)
    {
        return Booking::where('flight_id', $flightId)->get();
    }
}
