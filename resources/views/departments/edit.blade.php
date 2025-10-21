<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.master')
    @section('content')
    <div class="container mt-4">
        <h2>Edit Departemen</h2>
        
        <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nama_departemen" class="form-label">Nama Departemen</label>
            <input type="text" name="nama_departemen" class="form-control" 
                   value="{{ $department->nama_departemen }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

</body>
</html>