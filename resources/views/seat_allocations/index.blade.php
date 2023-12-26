@extends('layouts.app')

@section('content')
    <h1>Seat Allocations</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Trip</th>
                <th>Seat</th>
                <th>User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($seatAllocations as $seatAllocation)
                <tr>
                    <td>{{ $seatAllocation->id }}</td>
                    <td>{{ $seatAllocation->trip->id }}</td>
                    <td>{{ $seatAllocation->seat->seat_number }}</td>
                    <td>{{ $seatAllocation->user->name }}</td>
                    <td>
                        <a href="{{ route('seat_allocations.show', $seatAllocation->id) }}">View</a>
                        <a href="{{ route('seat_allocations.edit', $seatAllocation->id) }}">Edit</a>
                        <form action="{{ route('seat_allocations.destroy', $seatAllocation->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('seat_allocations.create') }}">Allocate Seat</a>
@endsection