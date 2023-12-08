@extends('layouts.app')
@section('body')
<div class=" ">
    <div class="d-flex align-items-center justify-content-between mb-2">
        <h3 class="mb-0">List merek</h3>
        <a class="btn btn-info btn-hover-info" href="{{ route('merek.create') }}" role="button">Tambah merek</a>
    </div> <hr>
    @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped ">
            <thead class="table-info">
                <tr class="text-center">
                    <th style="width: 5%">Nomor</th>
                    <th>nama merek</th>
                    <th>Nama Pemilik</th>
                    <th>nomor Hp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($mereks->count() > 0)
                    @foreach ($mereks as $merek )
                    <tr class="text-center">
                        <td class="align-middle" style="text-align: center;">{{ $loop->iteration }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $merek->namamerek }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $merek->pemilik }}</td>
                        <td class="align-middle" style="text-align: center;">{{ $merek->nohp }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('merek.show', $merek->id) }}" type="button" class="btn btn-success mx-1">Detail</a>
                            <a href="{{ route('merek.edit', $merek->id) }}" type="button" class="btn btn-warning mx-1">Edit</a>
                            <form action="{{ route('merek.destroy', $merek->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus merek ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger p-2">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" style="text-align: center;">Data Tidak Ada</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
