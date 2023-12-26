@extends('layouts.app')

@section('content')
    <h1>Edit Seat Allocation</h1>

    <form action="{{ route('seat_allocations.update', $seatAllocation->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="trip_id">Trip:</label>
        <select name="trip_id" required>
            @foreach($trips as $trip)
                <option value="{{ $trip->id }}" {{ $trip->id == $seatAllocation->trip_id ? 'selected' : '' }}>{{ $trip->id }}</option>
            @endforeach
        </select>
        <br>
        <label for="seat_id">Seat:</label>
        <select name="seat_id" required>
            @foreach($seats as $seat)
                <option value="{{ $seat->id }}" {{ $seat->id == $seatAllocation->seat_id ? 'selected' : '' }}>{{ $seat->seat_number }}</option>
            @endforeach
        </select>
        <br>
        <label for="user_id">User:</label>