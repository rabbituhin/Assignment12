@extends('layouts.app')

@section('content')
    <h1>Seat Details</h1>

    <p><strong>Seat Number:</strong> {{ $seat->seat_number }}</p>

    <a href="{{ route('seats.edit', $seat->id) }}">Edit</a>
    <form action="{{ route('seats.destroy', $seat->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection