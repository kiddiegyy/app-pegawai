<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.master')
    @section('title', 'Tambah Salary')
    @section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Form Salary</h2>
        <form action="{{ route('salaries.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID</label>
                <input type="number" name="employee_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="bulan" class="form-label">Bulan</label>
                <select name="bulan" class="form-select" required>
                    @foreach(['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'] as $bulan)
                    <option value="{{ $bulan }}">{{ $bulan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" name="tahun" class="form-control" value="{{ date('Y') }}" required>
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                <input type="number" name="gaji_pokok" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tunjangan" class="form-label">Tunjangan</label>
                <input type="number" name="tunjangan" class="form-control" value="0">
            </div>
            <div class="mb-3">
                <label for="potongan" class="form-label">Potongan</label>
                <input type="number" name="potongan" class="form-control" value="0">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('salaries.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    @endsection
</body>
</html>