<?php

namespace App\Http\Controllers;
use App\Models\merek;
use Illuminate\Http\Request;
class merekController extends Controller
{
    public function index()
    {
        $mereks = merek::orderBy('created_at', 'DESC')->get();
        return view('halaman.merek.index', compact('mereks'));
    }
    public function create()
    {
        return view('halaman.merek.create');
    }
    public function store(Request $request)
    {
        merek::create($request->all());
        return redirect()->route('merek.index')->with('success', 'Merek berhasil di tambahkan');
    }
    public function show(string $id)
    {
        $merek = merek::findOrFail($id);
        return view('halaman.merek.show', compact('merek'));
    }
    public function edit(string $id)
    {
        $merek = merek::findOrFail($id);
        return view('halaman.merek.edit', compact('merek'));
    }
    public function update(Request $request, string $id)
    {
        $merek = merek::findOrFail($id);
        $merek->update($request->all());
        return redirect()->route('merek.index')->with('success', 'Data merek berhasil di Update');
    }
    public function destroy(string $id)
    {
        $merek = merek::findOrFail($id);
        $merek->delete();
        return redirect()->route('merek.index')->with('success', 'Data merek berhasil di Hapus');
    }
}
