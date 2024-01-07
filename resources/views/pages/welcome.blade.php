@extends('layouts.app')

@section('body')
{{-- <div class="">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List Produk</h3>
    </div>
    <hr> --}}


    <div class="mt-4" >
        <div class="">
            <div class=" bg-white">
                <h3 class="mt-3">Selamat Datang</h3>
                <p class="lead">Selamat datang di <b class="font-weight-bold text-info">ArdianTeknologi</b>, destinasi terbaik untuk pencinta teknologi dan gadget. Di sini, kami menyajikan informasi terkini seputar produk-produk gadget terbaru, ulasan mendalam, dan berita terbaru dari dunia teknologi. Dari smartphone hingga perangkat canggih lainnya, ArdianTeknologi menjadi sumber utama bagi para pecinta inovasi dan teknologi.</p>
            </div>
        </div>
    </div>



        <hr>

        @if($produks->count() > 0)
        <div class="mt-3">
            <div class="row">
                @php
                    $reversedProduks = $produks->reverse();
                @endphp

                @foreach ($reversedProduks as $produk)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                            <img src="{{ asset('images/' . $produk->img) }}" class="card-img-top" alt="{{ $produk->judul }}" style="margin-top:10px; display: block; margin-left: auto; margin-right: auto; width: 90%; height: 200px; object-fit: cover;">
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
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            Tidak ada produk gadget yang Tersedia.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <!-- Daftar produk -->

</div>
@endsection
