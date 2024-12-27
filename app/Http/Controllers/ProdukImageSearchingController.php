<?php

namespace App\Http\Controllers;

use App\Models\ProdukImageSearching;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProdukImageSearchingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $produkimagesearching = ProdukImageSearching::search($request->search ?? '')->get();
          
        return view('crudimagebasicsearching.index', compact('produkimagesearching'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudimagebasicsearching.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/produkimagesearching', $image->hashName());

        //create product
        ProdukImageSearching::create([
            'image'         => $image->hashName(),
            'description'   => $request->description,
        ]);

        //redirect to index
        return redirect()->route('crudimagebasicsearching.index');
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
        $produkimagesearching = ProdukImageSearching::findOrFail($id);
        return view('crudimagebasicsearching.edit', compact('produkimagesearching'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produkimagesearching = ProdukImageSearching::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/produkimagesearching', $image->hashName());

            //delete old image
            Storage::delete('public/produkimagesearching/'.$produkimagesearching->image);

            //update product with new image
            $produkimagesearching->update([
                'image'         => $image->hashName(),
                'description'   => $request->description
            ]);

        } else {

            //update product without image
            $produkimagesearching->update([
                'description'   => $request->description,
            ]);
        }

        //redirect to index
        return redirect()->route('crudimagebasicsearching.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produkimagesearching = ProdukImageSearching::findOrFail($id);

        //delete image
        Storage::delete('public/produkimagesearching/'. $produkimagesearching->image);

        //delete product
        $produkimagesearching->delete();

        //redirect to index
        return redirect()->route('crudimagebasicsearching.index');
    }
}
