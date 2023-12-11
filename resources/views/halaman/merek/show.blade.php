@extends('layouts.app')
@section('body')
<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Detail merek</h3>
    <a class="btn btn-info btn-hover-info" href="{{ route('merek.index') }}" role="button">kembali</a>
</div>
<hr>
<div class="form-floating mb-3">
    <input type="text" class="form-control" name="nama" value="{{ $merek->namamerek }}" placeholder="Nama merek" readonly>
    <label for="floatingInput">Nama merek</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="nohp" value="{{ $merek->nohp }}" placeholder="Nomor Hp" readonly>
    <label for="floatingInput">Nomor Hp</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="nama" value="{{ $merek->pemilik }}" placeholder="pemilik merek" readonly>
    <label for="floatingInput">Pemilik merek</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="alamat" value="{{ $merek->alamat }}" placeholder="Alamat" readonly>
    <label for="floatingInput">Alamat</label>
  </div>
@endsection
