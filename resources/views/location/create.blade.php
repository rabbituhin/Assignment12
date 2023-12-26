@extends('layouts.app')

@section('content')
    <h1>Create New Location</h1>

    <form action="{{ route('locations.store') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <button type="submit">Create Location</button>
    </form>
@endsection