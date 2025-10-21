<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Data Attendance')
    @section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Data Attendance</h2>
        <a href="{{ route('attendance.create') }}" class="btn btn-primary mb-3">+ Tambah Attendance</a>
        
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Employee ID</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->id }}</td>
                    <td>{{ $attendance->employee_id }}</td>
                    <td>{{ $attendance->tanggal }}</td>
                    <td>{{ $attendance->status }}</td>
                    <td>{{ $attendance->jam_masuk }}</td>
                    <td>{{ $attendance->jam_keluar }}</td>
                    <td>
                        <a href="{{ route('attendance.show', $attendance->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('attendance.edit', $attendance->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
</body>
</html>