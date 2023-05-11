@extends('layouts.app',['title'=>'Edit pengiriman'])

@section('content')
<a href="{{ route('pengiriman.index') }}" class="btn btn-secondary">Daftar pengiriman</a>

<form action="{{ route('pengiriman.update',$pengiriman->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group mt-4">
    <label for="name">Kode pengiriman</label>
    <input type="text" id="kode_pengiriman" name="kode_pengiriman" class="form-control" value="{{ $pengiriman->kode_pengiriman }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">tanggal pengiriman</label>
    <input type="text" id="tanggal_pengiriman" name="tanggal_pengiriman" class="form-control" value="{{ $pengiriman->tanggal_pengiriman }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">Produk id</label>
    <input type="number" id="produk_id" name="produk_id" class="form-control"value="{{ $produk->produk_id }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">Jumlah produk</label>
    <input type="number" id="jumlah_produk" name="jumlah_produk" class="form-control"
      value="{{ $produk->jumlah_produk }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">alamat pengiriman</label>
    <input type="date" id="alamat_pengiriman" name="alamat_pengiriman" class="form-control"
      value="{{ $pengiriman->alamat_pengiriman }}">
  </div>
  <div class="form-group mt-4">
    <input type="submit" class="btn btn-warning" value="Edit">
  </div>
</form>
@endsection