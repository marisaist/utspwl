<?php

namespace App\Http\Controllers;

use App\Models\Production;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    public function index()
	{
		$pengirimans = Delivery::all();
		return view('pengiriman.index', compact('pengirimans'));
	}

	public function create()
	{
		$produksi = Production::all();
		return view('pengiriman.create',compact('produksi'));
	}

	public function store(Request $request)
	{
		$request->validate([
			'kode_pengiriman' => 'required',
			'tanggal_pengiriman' => 'required|date',
			'jumlah_produk' => 'required|integer',
			'alamat_pengiriman' => 'required',
			'produksi_id'=> 'required|exists:production,id',
			
		]);
		Delivery::insert([
			'kode_pengiriman' => $request->kode_pengiriman,
			'tanggal_pengiriman' => $request->tanggal_pengiriman,
			'jumlah_produk' => $request->jumlah_produk,
			'alamat_pengiriman' => $request->alamat_pengiriman,
			'produksi_id' => $request->produksi_id,
			'created_at' => now(),
			'update_at' => now(),
			
		]);
		// dd($request);
		return redirect(route('pengiriman.index'))->with('success', 'pengiriman berhasil ditambahkan.');
	}

	public function show($id)
	{
		$pengiriman = Delivery::findOrFail($id);

        return view('pengiriman.show', compact('pengiriman'));
	}

	public function edit($id)
	{
		$pengiriman = Delivery::findOrFail($id);

        return view('pengiriman.edit', compact('pengiriman'));
	}

	public function update(Request $request, $id)
	{

		Delivery::findOrFail($id)->update([
            'kode_pengiriman' => $request->kode_pengiriman,
			'tanggal_pengiriman' => $request->tanggal_pengiriman,
			'jumlah_produk' => $request->jumlah_produk,
			'alamat_pengiriman' => $request->alamat_pengiriman,
            'updated_at' => now()
        ]);
		return redirect(route('pengiriman.index'))->with('success', 'pengiriman berhasil diedit.');
	}

	public function destroy($id)
	{
		Delivery::findOrFail($id)->delete();

        return redirect(route('pengiriman.index'))->with('success', 'pengiriman berhasil dihapus.');
	}

}
