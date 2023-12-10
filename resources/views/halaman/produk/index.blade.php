@extends('layouts.app')
@section('body')
<div class="">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List Produk</h3>
        <a class="btn btn-info btn-hover-info" href="{{ route('produk.create') }}" role="button">Tambah produk</a>
    </div> <hr>
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
                            <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                            <td class="align-middle" style="text-align: center;">{{ $produk->judul }}</td>
                            <td class="align-middle" style="text-align: center;">{{ $produk->merek->namamerek }}</td>
                            <td class="align-middle" style="text-align: center;">{{ $produk->kategori->namakategori }}</td>
                            <td class="align-middle" style="text-align: center;">{{ $produk->harga}}</td>
                            <td class="align-middle" style="text-align: center;">{{ $produk->stok}}</td>
                            <td class="align-middle" style="text-align: center;">
                                @if($produk->img)
                                    <img src="{{ asset('images/' . $produk->img) }}" alt="Preview" width="70px" height="42px;">
                                @else
                                    Tidak Ada Gambar
                                @endif
                            </td>

                            <td class="align-middle" style="text-align: center;">{{ $produk->updated_at->format('F d, Y') }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('produk.show', $produk->id) }}" type="button" class="btn btn-success mx-1">Detail</a>
                                <a href="{{ route('produk.edit', $produk->id) }}" type="button" class="btn btn-warning mx-1">Edit</a>
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger p-2">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="8" style="text-align: center;">Data Tidak Ada</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</div>
@endsection
