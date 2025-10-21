<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    @extends('layouts.master')
    @section('content')
    <div class="container mt-4">
        <h2>Tambah Jabatan</h2>
        
        <form action="{{ route('positions.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
            <input type="number" step="0.01" name="gaji_pokok" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('positions.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

</body>
</html>