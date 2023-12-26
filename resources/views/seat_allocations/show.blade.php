@extends('layouts.app')

@section('content')
    <h1>Seat Allocation Details</h1>

    <p><strong>Trip:</strong> {{ $seatAllocation->trip->id }}</p>
    <p><strong>Seat:</strong> {{ $seatAllocation->seat->seat_number }}</p>
    <p><strong>User:</strong> {{ $seatAllocation->user->name }}</p>

    <a href="{{ route('seat_allocations.edit', $seatAllocation->id) }}">Edit</a>
    <form action="{{ route('seat_allocations.destroy', $seatAllocation->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection