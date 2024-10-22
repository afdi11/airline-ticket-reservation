<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    // Retrieve all flights
    public function index()
    {
        return Flight::all();
    }

    // Store a new flight
    public function store(Request $request)
    {
        $flight = Flight::create($request->all());
        return response()->json($flight, 201);
    }

    // Retrieve a specific flight by ID
    public function show($id)
    {
        return Flight::findOrFail($id);
    }
}
