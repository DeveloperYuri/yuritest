<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function index()
    {
        $produks = Produk::all();

        return view('crudbasic.index', compact('produks'));
    }

    public function create()
    {
        return view('crudbasic.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->all());

        return redirect()->route('crudbasic.index');
    }

    public function destroy(Produk $id)
    {
        $id->delete();

        return redirect()->route('crudbasic.index');
    }

    public function edit(Produk $id)
    {
        //
        return view('crudbasic.edit', compact('id'));
    }
    
    public function update(Request $request, string $id){
        $produks = Produk::findOrFail($id);

        $produks->update([
            'nama'         => $request->nama,
            'deskripsi'   => $request->deskripsi
        ]);
 
        return redirect()->route('crudbasic.index');
    }

    public function show(string $id): View
    {
        //get product by ID
        $produks = Produk::findOrFail($id);

        //render view with product
        return view('crudbasic.show', compact('produks'));
    }

}
