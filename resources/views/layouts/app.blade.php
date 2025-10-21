<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem HR - Laravel')</title>

    <!-- CSS buatan sendiri -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap (opsional, bisa dihapus kalau hanya pakai CSS sendiri) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Sistem HR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('employees.index') }}" class="nav-link">Employees</a></li>
                    <li class="nav-item"><a href="{{ route('departments.index') }}" class="nav-link">Departments</a></li>
                    <li class="nav-item"><a href="{{ route('positions.index') }}" class="nav-link">Positions</a></li>
                    <li class="nav-item"><a href="{{ route('attendance.index') }}" class="nav-link">Attendance</a></li>
                    <li class="nav-item"><a href="{{ route('salaries.index') }}" class="nav-link">Salaries</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>&copy; {{ date('Y') }} Sistem HR Laravel | Dibuat dengan ❤️ oleh Anda</small>
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
