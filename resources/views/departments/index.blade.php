<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
   @extends('layouts.master')
   @section('title', 'Data Departemen')
   @section('content')
   <div class="container mt-4">
    <h2>Daftar Departemen</h2>
    <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">+ Tambah Departemen</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Departemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->nama_departemen }}</td>
                    <td>
                        <a href="{{ route('departments.show', $department->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('departments.destroy', $department->id) }}" 
                              method="POST" 
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

</body>
</html>