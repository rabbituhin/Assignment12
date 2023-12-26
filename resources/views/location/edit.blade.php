@extends('layouts.app')

@section('content')
    <h1>Edit Location</h1>

    <form action="{{ route('locations.update', $location->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $location->name }}" required>
        <br>
        <button type="submit">Update Location</button>
    </form>
@endsection