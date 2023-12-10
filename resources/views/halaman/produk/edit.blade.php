@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">Edit produk</h3>
        <a class="btn btn-dark" href="{{ route('produk.index') }}" role="button">Kembali</a>
    </div>
    <hr />
    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul produk</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $produk->judul }}">
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" aria-label="Default select example" disabled>
                <option value="{{ $produk->kategori->id }}">{{ $produk->kategori->namakategori }}</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" class="form-control" id="merek" name="namamerek" value="{{ $produk->merek->namamerek }}" disabled>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga produk</label>
            <div class="input-group"> <!-- Tambahkan div untuk menggunakan Bootstrap input group -->
                <span class="input-group-text" id="rupiah-addon">Rp. </span> <!-- Tambahkan span dengan Rp. -->
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}">
            </div>
        </div>

        <script>
            const inputHarga = document.getElementById('harga');

            inputHarga.addEventListener('input', function (e) {
                // Hilangkan karakter selain angka
                let nominal = this.value.replace(/\D/g, '');

                // Format ke dalam rupiah
                nominal = new Intl.NumberFormat('id-ID').format(nominal);

                // Tambahkan "Rp." secara manual sebelum nominal
                nominal = 'Rp. ' + nominal;

                // Tampilkan kembali ke dalam input
                this.value = nominal;
            });
        </script>

         <div class="mb-3">
            <label for="stok" class="form-label">Stok produk</label>
            <input type="text" class="form-control" id="stok" name="stok" value="{{ $produk->stok }}">
        </div>
        <label for="gambar" class="mb-2 d-block">Pilih Gambar</label>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="img" name="img" onchange="previewImage(event)">
        </div>
        <img id="preview" class="mt-2 mb-2" src="{{ asset('images/' . $produk->img) }}" alt="Preview Gambar"
            style="max-width: 200px; max-height: 200px;">

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


        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" style="height: 300px" onkeyup="checkDescriptionLength()">{{ $produk->description }}</textarea>

            <p id="charCountMessage"></p>
        </div>

        <script>
            function checkDescriptionLength() {
                var description = document.getElementById("description").value;
                var charCountMessage = document.getElementById("charCountMessage");

                if (description.length < 200) {
                    charCountMessage.textContent = "Minimal 200 karakter diperlukan.";
                } else {
                    charCountMessage.textContent = "";
                }
            }
        </script>

        <button type="submit" class="btn btn-info">Update</button>
    </form>
@endsection
