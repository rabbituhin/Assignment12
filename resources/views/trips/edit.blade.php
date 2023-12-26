@extends('layouts.app')

@section('content')
    <h1>Edit Trip</h1>

    <form action="{{ route('trips.update', $trip->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="date">Date:</label>
        <input type="date" name="date" value="{{ $trip->date }}" required>
        <br>
        <label for="departure_location_id">Departure Location:</label>
        <select name="departure_location_id" required>
            @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ $location->id == $trip->departure_location_id ? 'selected' : '' }}>{{ $location->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="intermediate_locations">Intermediate Locations:</label>
        <select name="intermediate_locations[]" multiple>
            @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ in_array($location->id, $trip->intermediate_locations) ? 'selected' : '' }}>{{ $location->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="destination_location_id">Destination Location:</label>
        <select name="destination_location_id" required>
            @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ $location->id == $trip->destination_location_id ? 'selected' : '' }}>{{ $location->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Update Trip</button>
    </form>
@endsection