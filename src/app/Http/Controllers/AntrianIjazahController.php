<?php

namespace App\Http\Controllers;

use App\Models\AntrianIjazah;
use App\Models\Murid;
use Illuminate\Http\Request;

class AntrianIjazahManualController extends Controller
{
    public function index()
    {
        $antrian = AntrianIjazah::with('murid')->orderBy('tanggal_antri')->get();
        return view('antrian.index', compact('antrian'));
    }

    public function create()
    {
        $murids = Murid::all();
        return view('antrian.create', compact('murids'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'murid_id' => 'required|exists:murids,id',
            'tanggal_antri' => 'required|date',
            'status' => 'required|in:menunggu,selesai',
        ]);

        AntrianIjazah::create($request->all());

        return redirect()->route('antrian.index')->with('success', 'Antrian ditambahkan.');
    }

    public function edit($id)
    {
        $antrian = AntrianIjazah::findOrFail($id);
        $murids = Murid::all();
        return view('antrian.edit', compact('antrian', 'murids'));
    }

    public function update(Request $request, $id)
    {
        $antrian = AntrianIjazah::findOrFail($id);

        $request->validate([
            'murid_id' => 'required|exists:murids,id',
            'tanggal_antri' => 'required|date',
            'status' => 'required|in:menunggu,selesai',
        ]);

        $antrian->update($request->all());

        return redirect()->route('antrian.index')->with('success', 'Antrian diperbarui.');
    }

    public function destroy($id)
    {
        AntrianIjazah::destroy($id);
        return redirect()->route('antrian.index')->with('success', 'Antrian dihapus.');
    }
}
