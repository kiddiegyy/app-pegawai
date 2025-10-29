<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.master')
    @section('title', 'Detail Attendance')
    @section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Detail Attendance</h2>
        <div class="card shadow-sm p-4">
            <p><strong>ID:</strong> {{ $attendance->id }}</p>
            <p><strong>Employee ID:</strong> {{ $attendance->employee_id }}</p>
            <p><strong>Tanggal:</strong> {{ $attendance->tanggal }}</p>
            <p><strong>Status:</strong> {{ $attendance->status }}</p>
            <p><strong>Jam Masuk:</strong> {{ $attendance->jam_masuk ?? '-' }}</p>
            <p><strong>Jam Keluar:</strong> {{ $attendance->jam_keluar ?? '-' }}</p>
        </div>
        <a href="{{ route('attendance.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
    @endsection
</body>
</html>