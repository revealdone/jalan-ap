<?php
namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LaporanController extends Controller
{
    public function index() {
        $laporan = Laporan::latest()->get();
        return Inertia::render('Home', ['laporan' => $laporan]);
    }

    public function dashboard() {
        $laporan = Laporan::latest()->get();
        return Inertia::render('Dashboard', ['laporan' => $laporan]);
    }

    public function create() {
        return Inertia::render('Laporan/Create');
    }

    // app/Http/Controllers/LaporanController.php

public function edit($id)
{
    $laporan = Laporan::findOrFail($id);
    return Inertia::render('Laporan/Edit', [
        'laporan' => $laporan
    ]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'lokasi' => 'required|string|max:255',
        'isi_laporan' => 'required|string',
    ]);

    $laporan = Laporan::findOrFail($id);
    $laporan->update($request->all());

    return redirect()->route('dashboard');
}

public function destroy($id)
{
    $laporan = Laporan::findOrFail($id);
    $laporan->delete();

    return redirect()->back();
}


    public function store(Request $request) {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'isi_laporan' => 'required|string',
        ]);

        Laporan::create($validated);

        return redirect()->route('dashboard')->with('success', 'Laporan berhasil ditambahkan.');
    }
}
