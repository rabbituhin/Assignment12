<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiki Online Ticketing System</title>
</head>
<body>

    <header>
        <h1>Tiki Online Ticketing System</h1>
        <nav>
            <ul>
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <li><a href="{{ route('locations.index') }}">Locations</a></li>
                <li><a href="{{ route('trips.index') }}">Trips</a></li>
                <li><a href="{{ route('seats.index') }}">Seats</a></li>
                <li><a href="{{ route('seat_allocations.index') }}">Seat Allocations</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Tiki Online Ticketing System</p>
    </footer>

</body>
</html>