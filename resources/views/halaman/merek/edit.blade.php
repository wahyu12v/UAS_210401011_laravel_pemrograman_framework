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

        <div class="mb-3">
            <label for="namaMerek" class="form-label">Nama merek</label>
            <input type="text" class="form-control" id="namamerek" name="nama" value="{{ $merek->namamerek }}">
        </div>

        <div class="mb-3">
            <label for="nomorHp" class="form-label">Nomor Hp</label>
            <input type="text" class="form-control" id="nomorHp" name="nohp" value="{{ $merek->nohp }}">
        </div>

        <div class="mb-3">
            <label for="pemilikMerek" class="form-label">Pemilik merek</label>
            <input type="text" class="form-control" id="pemilikMerek" name="pemilik" value="{{ $merek->pemilik }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="4">{{ $merek->alamat }}</textarea>
        </div>

     
        <button type="submit" class="btn btn-dark">Update</button>
    </form>

@endsection
