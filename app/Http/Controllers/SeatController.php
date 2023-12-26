<?php

// app/Http/Controllers/SeatController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Seat;

class SeatController extends Controller
{
    // Existing methods remain unchanged

    public function bookSeat(Trip $trip, Seat $seat)
    {
        // Ensure the seat is available
        if (!$seat->is_available) {
            return redirect()->route('trips.show', ['trip' => $trip])->with('error', 'Seat is already booked!');
        }

        // Book the seat for the logged-in user
        auth()->user()->seats()->save($seat);

        // Mark the seat as booked
        $seat->is_available = false;
        $seat->save();

        // Redirect back to the trip show page with a success message
        return redirect()->route('trips.show', ['trip' => $trip])->with('success', 'Seat booked successfully!');
    }
}
