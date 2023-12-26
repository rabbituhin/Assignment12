@extends('layouts.app')

@section('content')
    <h1>Create New Seat</h1>

    <form action="{{ route('seats.store') }}" method="post">
        @csrf
        <label for="seat_number">Seat Number:</label>
        <input type="text" name="seat_number" required>
        <br>
        <button type="submit">Create Seat</button>
    </form>
@endsection