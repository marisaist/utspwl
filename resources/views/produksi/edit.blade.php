@extends('layouts.app',['title'=>'Edit Produksi'])

@section('content')
<a href="{{ route('produksi.index') }}" class="btn btn-secondary">Daftar Produksi</a>

<form action="{{ route('produksi.update',$produksi->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group mt-4">
    <label for="name">Kode Produk</label>
    <input type="text" id="kode_produk" name="kode_produk" class="form-control" value="{{ $produksi->kode_produk }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">Nama Produk</label>
    <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="{{ $produksi->nama_produk }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">Jumlah Produksi</label>
    <input type="number" id="jumlah_produksi" name="jumlah_produksi" class="form-control"
      value="{{ $produksi->jumlah_produksi }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">Tanggal Produksi</label>
    <input type="date" id="tanggal_produksi" name="tanggal_produksi" class="form-control"
      value="{{ $produksi->tanggal_produksi }}">
  </div>
  <div class="form-group mt-4">
    <input type="submit" class="btn btn-warning" value="Edit">
  </div>
</form>
@endsection