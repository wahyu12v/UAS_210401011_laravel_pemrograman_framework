@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Edit Kategori</h3>
    <a class="btn btn-dark" href="{{ route('kategori.index') }}" role="button">Kembali</a>
</div>
    <hr />

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')


          <div class="mb-3">
            <label for="namaKategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="namakategori" value="{{ $kategori->namakategori }}">
        </div>

        <div class="mb-3">
            <label for="jenisKategori" class="form-label">Jenis Kategori</label>
            <input type="text" class="form-control" name="jenis" value="{{ $kategori->jenis }}">
        </div>

          <button class="btn btn-dark">Update</button>

    </form>
@endsection
