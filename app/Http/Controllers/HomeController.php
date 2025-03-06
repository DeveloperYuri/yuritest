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

    // public function store(Request $request)
    // {
    //     Produk::create($request->all());
    //     return redirect()->route('crudbasic.index');
    // }

    public function store(Request $request){

        $request->validate([
            'nama'   => 'required|min:10',
            'deskripsi'   => 'required|min:10',
        ]);


        $save = new Produk;

        $save->nama = trim($request->nama);
        $save->deskripsi = trim($request->deskripsi);
        $save->category = trim($request->category);
        $save->date = date('Y-m-d H:i:s');
        $save->input_checkbox = trim($request->input_checkbox);
        $save->input_radio = trim($request->input_radio);
        $save->input_textarea = trim($request->input_textarea);

        $save->save();
        // dd($save);

        return redirect('/crud')->with('success', 'Insert Successfully');

    }

    public function destroy(Produk $id)
    {
        $id->delete();

        return redirect()->route('crudbasic.index');
    }

    public function edit(Produk $id)
    {
        $data['getRecord'] = Produk::findOrFail($id);
        return view('crudbasic.edit', $data);
    }
    
    public function update(Request $request, string $id){
        $produks = Produk::findOrFail($id);

        $produks->update([
            'nama'         => $request->nama,
            'deskripsi'   => $request->deskripsi
        ]);

        // fsafsa
 
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
