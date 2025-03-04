<?php

namespace App\Http\Controllers;

use App\Models\ProdukInputLengkap;
use Illuminate\Http\Request;

class ProdukInputLengkapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkinputlengkap = ProdukInputLengkap::all();

        return view('crudinputlengkap.index', compact('produkinputlengkap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudinputlengkap.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //create product
        $data = ProdukInputLengkap::create([
            'nama'          => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'category'     => $request->category,
        ]);

        dd($data);

        //redirect to index
        // return redirect()->route('crudinputlengkap.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
