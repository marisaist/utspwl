<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('material.index', compact('materials'));
    }

    public function create()
    {
        return view('material.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bahan' => 'required',
            'jumlah_stok' => 'required|integer',
        ]);

        Material::insert([
            'nama_bahan' => $request->nama_bahan,
            'jumlah_stok' => $request->jumlah_stok,
        ]);

        return redirect(route('material.index'))->with('success', 'material berhasil ditambahkan.');
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);

        return view('material.show', compact('material'));
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);

        return view('material.edit', compact('material'));
    }

    public function update(Request $request, $id)
    {
        Material::findOrFail($id)->update([
            'nama_bahan' => $request->nama_bahan,
            'jumlah_stok' => $request->jumlah_stok,
            'updated_at' => now()
        ]);

        return redirect(route('material.index'))->with('success', 'material berhasil diedit.');
    }

    public function destroy($id)
    {
        Material::findOrFail($id)->delete();

        return redirect(route('material.index'))->with('success', 'material berhasil dihapus.');
    }
}
