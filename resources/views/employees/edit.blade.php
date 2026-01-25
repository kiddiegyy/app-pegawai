<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Pegawai</title>
</head>
<body>
    @extends('layouts.master')
    @section('title', 'Edit Data Pegawai')
    @section('content')
    <h2>Edit Data Pegawai</h2>
    <form action="{{ route('employees.update', $employees->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $employees->nama_lengkap) }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{ old('email', $employees->email) }}"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $employees->nomor_telepon) }}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $employees->tanggal_lahir) }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="{{ old('alamat', $employees->alamat) }}"></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td><input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk', $employees->tanggal_masuk) }}"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status">
                        <option value="aktif" {{old('status', $employees->status) == 'aktif' ? 'selected' : ''}}>Aktif</option>
                        <option value="tidak aktif" {{old('status', $employees->status) == 'tidak aktif' ? 'selected' : ''}}>Tidak Aktif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>