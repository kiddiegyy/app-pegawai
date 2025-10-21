<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Detail Salary')
    @section('content')
    
    <div class="container mt-4">
        <h2 class="mb-4">Detail Salary</h2>
        
        <div class="card shadow-sm p-4">
            <p><strong>ID:</strong> {{ $salary->id }}</p>
            <p><strong>Employee ID:</strong> {{ $salary->employee_id }}</p>
            <p><strong>Bulan:</strong> {{ $salary->bulan }}</p>
            <p><strong>Tahun:</strong> {{ $salary->tahun }}</p>
            <p><strong>Gaji Pokok:</strong> Rp{{ number_format($salary->gaji_pokok, 0, ',', '.') }}</p>
            <p><strong>Tunjangan:</strong> Rp{{ number_format($salary->tunjangan, 0, ',', '.') }}</p>
            <p><strong>Potongan:</strong> Rp{{ number_format($salary->potongan, 0, ',', '.') }}</p>
            <hr>
            <p><strong>Total Gaji:</strong> <span class="text-success fw-bold">Rp{{ number_format($salary->total_gaji, 0, ',', '.') }}</span></p>
        </div>
        
        <a href="{{ route('salaries.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
    @endsection
</body>
</html>