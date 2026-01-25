<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App Pegawai')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ url('/') }}">App Pegawai</a>
            <ul class="navbar-nav d-flex flex-row">
                <li><a class="nav-link" href="{{ route('employees.index') }}">Employee</a></li>
                <li><a class="nav-link" href="{{ route('departments.index') }}">Department</a></li>
                <li><a class="nav-link" href="{{ route('positions.index') }}">Position</a></li>
                <li><a class="nav-link" href="{{ route('attendance.index') }}">Attendance</a></li>
                <li><a class="nav-link" href="{{ route('salaries.index') }}">Salaries</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>
</body>
</html>
