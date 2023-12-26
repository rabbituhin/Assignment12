<!-- resources/views/trips/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Trip</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('trips.store') }}">
        @csrf

        <label for="trip_date">Trip Date:</label>
        <input type="date" name="trip_date" required>

        <label for="origin">Origin:</label>
        <input type="text" name="origin" required>

        <label for="destination">Destination:</label>
        <input type="text" name="destination" required>

        <button type="submit">Confirm Booking</button>
    </form>
@endsection
