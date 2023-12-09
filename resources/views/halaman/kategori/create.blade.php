@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Tambah Kategori</h3>
    <a class="btn btn-info btn-hover-info"  href="{{ route('kategori.index') }}" role="button">Kembali</a>

</div>
<hr />

<form action="{{ route('kategori.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="namaKategori" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" id="namaKategori" name="namakategori">
    </div>

    <div class="mb-3">
        <label for="jenisKategori" class="form-label">Jenis Kategori</label>
        <input type="text" class="form-control" id="jenisKategori" name="jenis">
    </div>

      <button class="btn btn-info btn-hover-info">Submit</button>

</form>
@endsection
