@extends('layouts.app')

@section('content')
    <h1>Locations</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->name }}</td>
                    <td>
                        <a href="{{ route('locations.show', $location->id) }}">View</a>
                        <a href="{{ route('locations.edit', $location->id) }}">Edit</a>
                        <form action="{{ route('locations.destroy', $location->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('locations.create') }}">Create New Location</a>
@endsection