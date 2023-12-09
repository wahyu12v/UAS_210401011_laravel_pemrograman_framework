@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0">Detail Produk</h3>
        <a class="btn btn-info btn-hover-info" href="{{ route('produk.index') }}" role="button">Kembali</a>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ $produk->judul }}</h2>
                    <img src="/images/{{ $produk->img }}" class="mx-auto d-block img-fluid rounded"
                        style="max-width: 100%; height:auto;" alt="Image">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-4">Spesifikasi</h4>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Merek
                            <div>{{ $produk->merek->namamerek }}</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Kategori
                            <div>{{ $produk->kategori->namakategori }}</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Harga
                            <div>{{ $produk->harga }}</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Stok Produk
                            <div>{{ $produk->stok }}</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tanggal diposting
                            <div>{{ $produk->updated_at->format('F d, Y') }}</div>
                        </li>
                    </ul>


                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Deskripsi</h4>
                    <p class="card-text">{{ $produk->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection







