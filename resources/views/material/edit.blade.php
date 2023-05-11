@extends('layouts.app',['title'=>'Edit Material'])

@section('content')
<a href="{{ route('material.index') }}" class="btn btn-secondary">Daftar material</a>

<form action="{{ route('material.update',$material->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group mt-4">
    <label for="name">Nama Bahan</label>
    <input type="text" id="nama_bahan" name="nama_bahan" class="form-control" value="{{ $material->nama_bahan }}">
  </div>
  <div class="form-group mt-4">
    <label for="name">Jumlah Stok</label>
    <input type="text" id="jumlah_stok" name="jumlah_stok" class="form-control" value="{{ $material->jumlah_stok }}">
  </div>
  <div class="form-group mt-4">
    <input type="submit" class="btn btn-warning" value="Edit">
  </div>
</form>
@endsection