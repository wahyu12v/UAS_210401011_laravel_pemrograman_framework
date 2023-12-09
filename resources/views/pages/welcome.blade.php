@extends('layouts.app')

@section('body')
<div class="">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List Produk</h3>
    </div>
    <hr>


    <!-- Tampilkan hasil pencarian -->
    @if($produks->count() > 0)
        <div class="mt-3">
            <div class="row">
                @foreach ($produks as $produk)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/' . $produk->img) }}" class="card-img-top" alt="{{ $produk->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $produk->judul }}</h5>
                                <p class="card-text">{{ Str::limit($produk->description, 150) }}</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-info container mx-1">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p>Tidak ada hasil untuk pencarian ini.</p>
    @endif

    <!-- Daftar produk -->

</div>
@endsection
