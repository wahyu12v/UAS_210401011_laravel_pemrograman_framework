@extends('layouts.app')
@section('body')

<div class="d-flex align-items-center justify-content-between mb-2">
    <h3 class="mb-0">Tambah Author</h3>
    <a class="btn btn-info btn-hover-info" href="{{ route('merek.index') }}" role="button">Kembali</a>
</div>
<hr />
<form action="{{ route('merek.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="namaMerek" class="form-label">Nama Merek</label>
        <input type="text" class="form-control" id="namaMerek" name="namamerek">
    </div>

    <div class="mb-3">
        <label for="nomorHp" class="form-label">Nomor Hp</label>
        <input type="text" class="form-control" id="nomorHp" name="nohp">
    </div>

    <div class="mb-3">
        <label for="pemilikMerek" class="form-label">Pemilik Merek</label>
        <input type="text" class="form-control" id="pemilikMerek" name="pemilik">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" style="height: 200px"></textarea>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>

@endsection
