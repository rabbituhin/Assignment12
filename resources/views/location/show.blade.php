@extends('layouts.app')

@section('content')
    <h1>Location Details</h1>

    <p><strong>Name:</strong> {{ $location->name }}</p>

    <a href="{{ route('locations.edit', $location->id) }}">Edit</a>
    <form action="{{ route('locations.destroy', $location->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection