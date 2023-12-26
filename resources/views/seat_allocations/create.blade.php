@extends('layouts.app')

@section('content')
    <h1>Allocate Seat</h1>

    <form action="{{ route('seat_allocations.store') }}" method="post">
        @csrf
        <label for="trip_id">Trip:</label>
        <select name="trip_id" required>
            @foreach($trips as $trip)
                <option value="{{ $trip->id }}">{{ $trip->id }}</option>
            @endforeach
        </select>
        <br>
        <label for="seat_id">Seat:</label>
        <select name="seat_id" required>
            @foreach($seats as $seat)
                <option value="{{ $seat->id }}">{{ $seat->seat_number }}</option>
            @endforeach
        </select>
        <br>
        <label for="user_id">User:</label>
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Allocate Seat</button>
    </form>
@endsection