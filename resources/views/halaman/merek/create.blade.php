@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Tambah Author</h3>
    <a class="btn btn-info btn-hover-info" href="{{ route('merek.index') }}" role="button">Kembali</a>
</div>
<hr />
<form action="{{ route('merek.store') }}" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="namamerek" placeholder="Nama Merek">
        <label for="floatingInput">Nama Merek</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="nohp" placeholder="Nomor Hp">
        <label for="floatingInput">Nomor Hp</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="pemilik" placeholder="Pemilik Merek">
        <label for="floatingInput">Pemilik Merek</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Alamat" name="alamat" style="height: 200px"></textarea>
        <label for="floatingInput">Alamat</label>
      </div>
      <button class="btn btn-info btn-hover-info">Submit</button>
</form>

@endsection
