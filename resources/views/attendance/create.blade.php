<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.master')
    @section('title', 'Tambah Attendance')
    @section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Form Attendance</h2>
        
        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID</label>
                <input type="number" name="employee_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status Kehadiran</label>
                <select name="status" class="form-select" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Alfa">Alfa</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jam_masuk" class="form-label">Jam Masuk</label>
                <input type="time" name="jam_masuk" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jam_keluar" class="form-label">Jam Keluar</label>
                <input type="time" name="jam_keluar" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('attendance.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    @endsection
</body>
</html>