<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Edit Attendance')
    @section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Edit Attendance</h2>
        <form action="{{ route('attendance.update', $attendance->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID</label>
                <input type="number" name="employee_id" class="form-control" value="{{ $attendance->employee_id }}" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $attendance->tanggal }}" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status Kehadiran</label>
                <select name="status" class="form-select" required>
                    <option value="Hadir" {{ $attendance->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                    <option value="Izin" {{ $attendance->status == 'Izin' ? 'selected' : '' }}>Izin</option>
                    <option value="Sakit" {{ $attendance->status == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                    <option value="Alfa" {{ $attendance->status == 'Alfa' ? 'selected' : '' }}>Alfa</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jam_masuk" class="form-label">Jam Masuk</label>
                <input type="time" name="jam_masuk" class="form-control" value="{{ $attendance->jam_masuk }}">
            </div>
            <div class="mb-3">
                <label for="jam_keluar" class="form-label">Jam Keluar</label>
                <input type="time" name="jam_keluar" class="form-control" value="{{ $attendance->jam_keluar }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('attendance.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    @endsection
</body>
</html>