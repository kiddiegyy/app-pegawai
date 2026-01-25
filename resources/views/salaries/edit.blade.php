<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.master')
    @section('title', 'Edit Salary')
    @section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Edit Salary</h2>
        
        <form action="{{ route('salaries.update', $salary->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID</label>
                <input type="number" name="employee_id" class="form-control" value="{{ $salary->employee_id }}" required>
            </div>
            <div class="mb-3">
                <label for="bulan" class="form-label">Bulan</label>
                <select name="bulan" class="form-select" required>
                    @foreach(['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'] as $bulan)
                    <option value="{{ $bulan }}" {{ $salary->bulan == $bulan ? 'selected' : '' }}>{{ $bulan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" name="tahun" class="form-control" value="{{ $salary->tahun }}" required>
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                <input type="number" name="gaji_pokok" class="form-control" value="{{ $salary->gaji_pokok }}" required>
            </div>
            <div class="mb-3">
                <label for="tunjangan" class="form-label">Tunjangan</label>
                <input type="number" name="tunjangan" class="form-control" value="{{ $salary->tunjangan }}">
            </div>
            <div class="mb-3">
                <label for="potongan" class="form-label">Potongan</label>
                <input type="number" name="potongan" class="form-control" value="{{ $salary->potongan }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('salaries.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    @endsection
</body>
</html>