<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    @extends('layouts.master')
    @section('title', 'Detail Departemen')
    @section('content')
    <div class="container mt-4">
        <h2>Detail Departemen</h2>

    <div class="mb-3">
        <strong>ID:</strong> {{ $department->id }}
    </div>
    <div class="mb-3">
        <strong>Nama Departemen:</strong> {{ $department->nama_departemen }}
    </div>

    <a href="{{ route('departments.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection

</body>
</html>