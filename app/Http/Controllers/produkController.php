<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\merek;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class produkController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        $merek = produk::orderBy('created_at', 'DESC')->get();
    return view('halaman.produk.index', compact('produks', 'merek'));
    }

    public function create()
    {
        $ketegori = new Kategori();
        $data = $ketegori->getKategori();
        $Resultmerek = new merek();
        $datamerek = $Resultmerek->getmerek();
        return view('halaman.produk.create')
            ->with('kategori', $data)
            ->with('datamerek', $datamerek);
    }

    public function store(Request $request)
    {
        $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambar')->getClientOriginalName());

        $data = [
            'judul' => $request->judul,
            'id_merek' =>  $request->merek,
            'id_kategori' =>  $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'description' =>  $request->description,
            'img' => $foto,
        ];
        $request->file('gambar')->move(public_path('images'), $foto);
        produk::create($data);
        return redirect()->route('produk.index')->with('success', 'prodduk Behasil di Tambahkan')->with('kategori', $data);
    }

    public function show(string $id)
    {
        $produk = produk::findOrFail($id);
        $ketegori = new Kategori();
        $data = $ketegori->getKategori();
        return view('halaman.produk.show', compact('produk'))->with('kategori', $data,);
    }

    public function edit(string $id)
    {
        $produk = produk::findOrFail($id);
        $merek = new merek();
        $datamerek = $merek->getmerek();
        $kategori = new Kategori();
        $datakategori = $kategori->getKategori();
        return view('halaman.produk.edit', compact('produk', 'datakategori', 'datamerek'));
    }

    public function update(Request $request, string $id)
    {
        $produk = produk::findOrFail($id);
        $produk->update($request->all());
        return redirect()->route('produk.index')->with('success', 'Produk berhasil di update');
    }

    public function destroy(string $id)
    {
        $produk = produk::find($id);
        $img = $produk->img;
        $filePath = public_path( '/images/' . $img);

        if (file_exists($filePath)) {
            unlink($filePath);
        } else {

        }
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'prodduk Behasil di Hapus');
    }
}
