<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\merek;
use App\Models\Kategori;
use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        $merek = produk::orderBy('created_at','DESC')->get();

        // Kirim kedua variabel ke tampilan 'halaman.produk.index'
        return view('halaman.produk.index', compact('produks', 'merek'));
    }


    /**
     * Show the form for creating a new resource.
     */
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
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = round(microtime(true) * 1000).'-'.str_replace(' ', '-', $request->file('gambar')->getClientOriginalName());

        $data = [
            'judul' => $request->judul,
             'merek' =>  $request->merek,
            'kategori' =>  $request->kategori,
            'harga' => $request->harga,
            'stok'=> $request->stok,
            'description' =>  $request->description,
            'img'=>$foto,
        ];

        // simpan foto
        $request->file('gambar')->move(public_path('images'), $foto);
        produk::create($data);
        return redirect()->route('produk.index')->with('success', 'prodduk Behasil di Tambahkan')->with('kategori', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = produk::findOrFail($id);

        $ketegori = new Kategori();
        $data = $ketegori->getKategori();

        return view('halaman.produk.show',compact('produk'))->with('kategori', $data, );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = produk::findOrFail($id);
        $merek = new merek();
        $datamerek = $merek->getmerek();
        $kategori = new Kategori();
        $datakategori = $kategori->getKategori();

        return view('halaman.produk.edit', compact('produk', 'datakategori', 'datamerek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = produk::findOrFail($id);
        $produk->update($request->all());
        return redirect()->route('produk.index')->with('success','Produk berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'prodduk Behasil di Hapus');

    }
}
