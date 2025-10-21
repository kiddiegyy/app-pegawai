<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.master')
    @section('content')
    <div class="container mt-4">
        <h2>Detail Jabatan</h2>
        <div class="mb-3">
        <strong>ID:</strong> {{ $position->id }}
    </div>
    <div class="mb-3">
        <strong>Nama Jabatan:</strong> {{ $position->nama_jabatan }}
    </div>
    <div class="mb-3">
        <strong>Gaji Pokok:</strong> {{ number_format($position->gaji_pokok, 2) }}
    </div>
    
    <a href="{{ route('positions.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection

</body>
</html>