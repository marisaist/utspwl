<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
	public function index()
	{
		$products = DB::table('produksi')->get();
		return view('produksi.index', compact('products'));
	}

	public function create()
	{
		return view('produksi.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'kode_produk' => 'required',
			'nama_produk' => 'required',
			'jumlah_produksi' => 'required|integer',
			'tanggal_produksi' => 'required|date'
		]);

		DB::table('produksi')->insert([
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
			'jumlah_produksi' => $request->jumlah_produksi,
			'tanggal_produksi' => $request->tanggal_produksi,
			'created_at' => now()
		]);
		// dd($request);
		return redirect(route('produksi.index'))->with('success', 'Produksi berhasil ditambahkan.');
	}

	public function show($id)
	{
		$produksi = DB::table('produksi')->where('id', $id)->first();

		return view('produksi.show', compact('produksi'));
	}

	public function edit($id)
	{
		$produksi = DB::table('produksi')->where('id', $id)->first();

		return view('produksi.edit', compact('produksi'));
	}

	public function update(Request $request, $id)
	{
		DB::table('produksi')->where('id', $id)->update([
			'kode_produk' => $request->kode_produk,
			'nama_produk' => $request->nama_produk,
			'jumlah_produksi' => $request->jumlah_produksi,
			'tanggal_produksi' => $request->tanggal_produksi,
			'updated_at' => now()
		]);

		return redirect(route('produksi.index'))->with('success', 'Produksi berhasil diedit.');
	}

	public function destroy($id)
	{
		DB::table('produksi')->where('id', $id)->delete();

		return redirect(route('produksi.index'))->with('success', 'Produksi berhasil dihapus.');
	}
}