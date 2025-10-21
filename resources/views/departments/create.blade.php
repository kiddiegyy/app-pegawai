<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    @extends('layouts.master')
    @section('content')
    <div class="container mt-4">
    <h2>Tambah Departemen</h2>

    <form action="{{ route('departments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_departemen" class="form-label">Nama Departemen</label>
            <input type="text" name="nama_departemen" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

</body>
</html>