@extends('layouts.app',['title'=>'Tambah material'])

@section('content')
<a href="{{ route('material.index') }}" class="btn btn-secondary">Daftar material</a>

<form action="{{ route('material.store') }}" method="POST">
  @csrf
  <div class="form-group mt-4">
    <label for="name">Nama Bahan</label>
    <input type="text" id="nama_bahan" name="nama_bahan" class="form-control">
  </div>
  <div class="form-group mt-4">
    <label for="name">Jumlah Stok</label>
    <input type="text" id="jumlah_stok" name="jumlah_stok" class="form-control">
  </div>
  <div class="form-group mt-4">
    <input type="submit" class="btn btn-success" value="Simpan">
  </div>
</form>
@endsection