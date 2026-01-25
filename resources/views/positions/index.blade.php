<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    @extends('layouts.master')
    @section('title', 'Daftar Jabatan')
    @section('content')
    <div class="container mt-4">
        <h2>Daftar Jabatan</h2>
        <a href="{{ route('positions.create') }}" class="btn btn-primary mb-3">+ Tambah Jabatan</a>
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Jabatan</th>
                    <th>Gaji Pokok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($positions as $position)
                <tr>
                    <td>{{ $position->id }}</td>
                    <td>{{ $position->nama_jabatan }}</td>
                    <td>{{ number_format($position->gaji_pokok, 2) }}</td>
                    <td>
                        <a href="{{ route('positions.show', $position->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('positions.destroy', $position->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
</div>
@endsection
</body>
</html>