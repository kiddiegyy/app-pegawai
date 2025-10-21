<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    @extends('layouts.master')
    @section('content')
    <div class="container mt-4">
        <h2>Edit Jabatan</h2>
        
        <form action="{{ route('positions.update', $position->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" class="form-control" 
                   value="{{ $position->nama_jabatan }}" required>
        </div>

        <div class="mb-3">
            <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
            <input type="number" step="0.01" name="gaji_pokok" class="form-control" 
                   value="{{ $position->gaji_pokok }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('positions.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
    
</body>
</html>