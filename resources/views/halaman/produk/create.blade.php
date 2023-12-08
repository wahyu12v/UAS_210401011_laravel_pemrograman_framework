@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">Tambah produk</h3>
        <a class="btn btn-info btn-hover-info" href="{{ route('produk.index') }}" role="button">Kembali</a>
    </div>
    <hr />
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul produk</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Pilih Kategori</label>
            <select class="form-select" id="kategori" aria-label="Default select example" name="kategori">
                <option selected disabled>Pilih Kategori</option>
                @foreach($kategori as $k)
                    <option value="{{$k->namakategori}}">{{$k->namakategori}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">Pilih merek</label>
            <select class="form-select" id="merek" aria-label="Default select example" name="merek">
                <option selected disabled>Pilih merek</option>
                @foreach($datamerek as $a)
                    <option value="{{ $a->namamerek }}">{{ $a->namamerek }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Pilih Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewImage(event)">
        </div>
        <img id="preview" class="mt-2 mb-2" src="#" alt="Preview Gambar" style="max-width: 200px; max-height: 200px; display: none;">

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" style="height: 300px"></textarea>
        </div>
        <button type="submit" class="btn btn-info btn-hover-info">Submit</button>
    </form>

    <script>
        function previewImage(event) {
            const input = event.target;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
