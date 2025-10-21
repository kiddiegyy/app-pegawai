<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Data Salaries')
    @section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Data Salaries</h2>
        <a href="{{ route('salaries.create') }}" class="btn btn-primary mb-3">+ Tambah Salary</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Employee ID</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan</th>
                    <th>Potongan</th>
                    <th>Total Gaji</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($salaries as $salary)
                <tr>
                    <td>{{ $salary->id }}</td>
                    <td>{{ $salary->employee_id }}</td>
                    <td>{{ $salary->bulan }}</td>
                    <td>{{ $salary->tahun }}</td>
                    <td>Rp{{ number_format($salary->gaji_pokok, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format($salary->tunjangan, 0, ',', '.') }}</td>
                    <td>Rp{{ number_format($salary->potongan, 0, ',', '.') }}</td>
                    <td><strong>Rp{{ number_format($salary->total_gaji, 0, ',', '.') }}</strong></td>
                    <td>
                        <a href="{{ route('salaries.show', $salary->id) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('salaries.edit', $salary->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('salaries.destroy', $salary->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="9" class="text-center">Tidak ada data salary</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>