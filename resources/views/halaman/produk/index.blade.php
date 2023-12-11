@extends('layouts.app')
@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List Produk</h3>
        <a class="btn btn-info btn-hover-info" href="{{ route('produk.create') }}" role="button">Tambah produk</a>
    </div>
    <hr>
    @if (Session::has('success'))
    <div class="alert alert-info" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-info">
                <tr class="text-center">
                    <th style="width: 5%">Nomor</th>
                    <th>Judul produk</th>
                    <th>Merek</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok Produk</th>
                    <th>Gambar</th>
                    <th>Waktu Posting</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($produks->count() > 0)
                @php
                $reversedProduks = $produks->reverse(); // Membalik urutan koleksi produk
                @endphp
                @foreach ($reversedProduks as $produk)
                <tr class="text-center">
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $produk->judul }}</td>
                    <td class="align-middle">{{ $produk->merek->namamerek }}</td>
                    <td class="align-middle">{{ $produk->kategori->namakategori }}</td>
                    <td class="align-middle">{{ $produk->harga }}</td>
                    <td class="align-middle">{{ $produk->stok }}</td>
                    <td class="align-middle">
                        @if($produk->img)
                        <img src="{{ asset('images/' . $produk->img) }}" alt="Preview"  style="max-width: 80px;">
                        @else
                        Tidak Ada Gambar
                        @endif
                    </td>
                    <td class="align-middle">{{ $produk->updated_at->format('F d, Y') }}</td>
                    <style>
                        .button-group {
                            display: flex;
                            gap: 2px;
                        }

                        .button-group button,
                        .button-group a {
                            flex: 1;
                            padding: 5px 5px; /* Sesuaikan dengan padding yang diinginkan */
                        }
                    </style>


                    <td class="align-middle">
                        <div class="button-group">
                            <a href="{{ route('produk.show', $produk->id) }}" type="button" class="btn btn-success ">Detail</a>
                            <a href="{{ route('produk.edit', $produk->id) }}" type="button" class="btn btn-warning ">Edit</a>
                            <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">Hapus</button>
                            </form>
                        </div>
                    </td>


                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="9" class="text-center">Data Tidak Ada</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
