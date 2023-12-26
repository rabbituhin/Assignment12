
@extends('layouts.app')

@section('content')
    <h1>Trip Details</h1>

    <p><strong>Date:</strong> {{ $trip->date }}</p>
    <p><strong>Departure Location:</strong> {{ $trip->departure_location_id }}</p>
    <p><strong>Intermediate Locations:</strong> {{ implode(', ', $trip->intermediate_locations) }}</p>
    <p><strong>Destination Location:</strong> {{ $trip->destination_location_id }}</p>

    <a href="{{ route('trips.edit', $trip->id) }}">Edit</a>
    <form action="{{ route('trips.destroy', $trip->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection