<?php

namespace App\Http\Controllers;
use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    public function index()
    {
        $seatAllocations = SeatAllocation::all();
        return view('seat_allocations.index', compact('seatAllocations'));
    }

    public function create()
    {
        $trips = Trip::all();
        $seats = Seat::all();
        $users = User::all();

        return view('seat_allocations.create', compact('trips', 'seats', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'seat_id' => 'required|exists:seats,id',
            'user_id' => 'required|exists:users,id',
        ]);

        SeatAllocation::create([
            'trip_id' => $request->input('trip_id'),
            'seat_id' => $request->input('seat_id'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation created successfully');
    }

    public function show($id)
    {
        $seatAllocation = SeatAllocation::findOrFail($id);
        return view('seat_allocations.show', compact('seatAllocation'));
    }

    public function edit($id)
    {
        $seatAllocation = SeatAllocation::findOrFail($id);
        $trips = Trip::all();
        $seats = Seat::all();
        $users = User::all();

        return view('seat_allocations.edit', compact('seatAllocation', 'trips', 'seats', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'seat_id' => 'required|exists:seats,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $seatAllocation = SeatAllocation::findOrFail($id);
        $seatAllocation->update([
            'trip_id' => $request->input('trip_id'),
            'seat_id' => $request->input('seat_id'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation updated successfully');
    }

    public function destroy($id)
    {
        $seatAllocation = SeatAllocation::findOrFail($id);
        $seatAllocation->delete();

        return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation deleted successfully');
    }
}
