<!-- resources/views/trips/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Trips</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Departure Location</th>
                <th>Intermediate Locations</th>
                <th>Destination Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trips as $trip)
                <tr>
                    <td>{{ $trip->id }}</td>
                    <td>{{ $trip->date }}</td>
                    <td>{{ $trip->departure_location_id }}</td>
                    <td>{{ implode(', ', $trip->intermediate_locations) }}</td>
                    <td>{{ $trip->destination_location_id }}</td>
                    <td>
                        <a href="{{ route('trips.show', $trip->id) }}">View</a>
                        <a href="{{ route('trips.edit', $trip->id) }}">Edit</a>
                        <form action="{{ route('trips.destroy', $trip->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('trips.create') }}">Create New Trip</a>
@endsection