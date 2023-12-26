@extends('layouts.app')

@section('content')
    <h1>Seats</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Seat Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($seats as $seat)
                <tr>
                    <td>{{ $seat->id }}</td>
                    <td>{{ $seat->seat_number }}</td>
                    <td>
                        <a href="{{ route('seats.show', $seat->id) }}">View</a>
                        <a href="{{ route('seats.edit', $seat->id) }}">Edit</a>
                        <form action="{{ route('seats.destroy', $seat->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('seats.create') }}">Create New Seat</a>
@endsection