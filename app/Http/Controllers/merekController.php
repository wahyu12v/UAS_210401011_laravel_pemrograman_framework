<?php

namespace App\Http\Controllers;

use App\Models\merek;
use Illuminate\Http\Request;

class merekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mereks = merek::orderBy('created_at', 'DESC')->get();

        return view('halaman.merek.index', compact('mereks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('halaman.merek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        merek::create($request->all());
        return redirect()->route('merek.index')->with('success', 'Merek berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $merek = merek::findOrFail($id);

        return view('halaman.merek.show', compact('merek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merek = merek::findOrFail($id);
        return view('halaman.merek.edit', compact('merek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $merek = merek::findOrFail($id);
        $merek->update($request->all());
        return redirect()->route('merek.index')->with('success', 'Data merek berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merek = merek::findOrFail($id);
        $merek->delete();
        return redirect()->route('merek.index')->with('success', 'Data merek berhasil di Hapus');
    }
}
