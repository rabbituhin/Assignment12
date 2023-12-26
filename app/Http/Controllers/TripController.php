<?php
// app/Http/Controllers/TripController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Seat;

class TripController extends Controller
{
    public function create()
    {
        return view('trips.create'); // Assuming you have a create.blade.php file in the trips folder
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'trip_date' => 'required|date',
            'origin' => 'required|string',
            'destination' => 'required|string',
        ]);

        // Create a new Trip instance and save it to the database
        $trip = Trip::create($validatedData);

        // Redirect to the trip details page or wherever you want
        return redirect("/trips/{$trip->id}");
    }
    public function show(Trip $trip)
    {
        // Retrieve seats associated with the trip
        $seats = Seat::where('trip_id', $trip->id)->get();

        // Pass trip and seats to the view
        return view('trips.show', compact('trip', 'seats'));
    }
    

    public function bookSeat(Trip $trip, Seat $seat)
    {
        // Book the seat
        $seat->is_available = false;
        $seat->save();

        // Redirect back to the trip show page with a success message
        return redirect()->route('trips.show', ['trip' => $trip])->with('success', 'Seat booked successfully!');
    }
}
