<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Menampilkan semua data posisi (jabatan)
     */
    public function index()
    {
        $positions = Position::orderBy('nama_jabatan')->paginate(15);
        return view('positions.index', compact('positions'));
    }

    /**
     * Menampilkan form tambah jabatan baru
     */
    public function create()
    {
        return view('positions.create');
    }

    /**
     * Menyimpan data jabatan baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:100',
            'gaji_pokok' => 'required|numeric|min:0',
        ]);

        Position::create($request->all());

        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit jabatan
     */
    public function edit($id)
    {
        $position = Position::findOrFail($id);
        return view('positions.edit', compact('position'));
    }

    /**
     * Memperbarui data jabatan di database
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:100',
            'gaji_pokok' => 'required|numeric|min:0',
        ]);

        $position = Position::findOrFail($id);
        $position->update($request->all());

        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil diperbarui.');
    }

    /**
     * Menghapus data jabatan
     */
    public function destroy($id)
    {
        $position = Position::findOrFail($id);
        $position->delete();

        return redirect()->route('positions.index')->with('success', 'Jabatan berhasil dihapus.');
    }
}
