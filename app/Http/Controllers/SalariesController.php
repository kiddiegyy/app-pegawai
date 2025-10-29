<?php

namespace App\Http\Controllers;

use App\Models\Salaries;
use App\Models\Employee;

use Illuminate\Http\Request;

class SalariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salaries::with('employee')->orderBy('bulan','desc')->paginate(15);
        return view('salaries.index', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::orderBy('nama_lengkap')->get();
        return view('salaries.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:20',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
            'potongan' => 'required|numeric',
        ]);

        $total = $request->gaji_pokok + $request->tunjangan - $request->potongan;
        Salaries::create(array_merge($request->all(), ['total_gaji' => $total]));

        return redirect()->route('salaries.index')->with('success','Gaji tersimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::orderBy('nama_lengkap')->get();
        return view('salaries.edit', compact('salary','employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'karyawan_id' => 'required|exists:employees,id',
            'bulan' => 'required|string|max:20',
            'gaji_pokok' => 'required|numeric',
            'tunjangan' => 'required|numeric',
            'potongan' => 'required|numeric',
        ]);

        $total = $request->gaji_pokok + $request->tunjangan - $request->potongan;
        $salary->update(array_merge($request->all(), ['total_gaji' => $total]));

        return redirect()->route('salaries.index')->with('success','Gaji diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary->delete();
        return redirect()->route('salaries.index')->with('success','Gaji dihapus.');
    }
}
