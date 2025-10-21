<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Aplikasi HR')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="nav">
        <div class="container">
            <a href="{{ url('/') }}" class="brand">HR App</a>
            <nav class="nav-links">
                <a href="{{ route('departments.index') }}">Departments</a>
                <a href="{{ route('positions.index') }}">Positions</a>
                <a href="{{ route('employees.index') }}">Employees</a>
                <a href="{{ route('attendance.index') }}">Attendance</a>
                <a href="{{ route('salaries.index') }}">Salaries</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">© {{ date('Y') }} HR App</div>
    </footer>
</body>
</html>
