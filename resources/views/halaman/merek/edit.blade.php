@extends('layouts.app')
@section('body')
<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Edit merek</h3>
    <a class="btn btn-dark" href="{{ route('merek.index') }}" role="button">Kembali</a>
</div>
    <hr />
    <form action="{{ route('merek.update', $merek->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama" value="{{ $merek->nama }}" placeholder="Nama merek">
            <label for="floatingInput">Nama merek</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nohp" value="{{ $merek->nohp }}" placeholder="Nomor Hp">
            <label for="floatingInput">Nomor Hp</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama" value="{{ $merek->pemilik }}" placeholder="Pemilik merek">
            <label for="floatingInput">Pemilik merek</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="alamat" value="{{ $merek->alamat }}" placeholder="Alamat">
            <label for="floatingInput">Alamat</label>
        </div>
          <button class="btn btn-dark ">Update</button>
    </form>
@endsection
