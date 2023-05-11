@extends('layouts.app',['title'=>'Tambah pengiriman'])

@section('content')
<a href="{{ route('pengiriman.index') }}" class="btn btn-secondary">Daftar pengiriman</a>

<form action="{{ route('pengiriman.store') }}" method="POST">
  @csrf
  <div class="form-group mt-4">
    <label for="name">Kode Pengiriman</label>
    <input type="text" id="kode_pengiriman" name="kode_pengiriman" class="form-control">
  </div>
  <div class="form-group mt-4">
    <label for="name">Alamat Pengiriman</label>
    <input type="text" id="tanggal_pengiriman" name="tanggal_pengiriman" class="form-control">
  </div>
  <div class="form-group mt-4">
    <label for="name">Id Produk</label>
    {{-- <input type="text" id="produk_id" name="produk_id" class="form-control"> --}}
    <select class="form-select" aria-label="Default select example">
      @foreach ($produksi as $item)
          <option>- Pilih Produk -</option>
          <option value="{{ $item->id }}">({{ $item->kode_produk }}) - {{ $item->nama_produk }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group mt-4">
    <label for="name">Jumlah Produk</label>
    <input type="number" id="jumlah_produk" name="jumlah_produk" class="form-control">
  </div>
  <div class="form-group mt-4">
    <label for="name">Tanggal Pengiriman</label>
    <input type="date" id="alamat_pengiriman" name="alamat_pengiriman" class="form-control">
  </div>
  <div class="form-group mt-4">
    <input type="submit" class="btn btn-success" value="Simpan">
  </div>
</form>
@endsection