<?php

namespace App\Http\Controllers;

use App\Models\ProdukImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkimage = ProdukImage::all();

        return view('crudimagebasic.index', compact('produkimage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudimagebasic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/produkimage', $image->hashName());

        //create product
        ProdukImage::create([
            'image'         => $image->hashName(),
            'description'   => $request->description,
        ]);

        //redirect to index
        return redirect()->route('crudimagebasic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produkimage = ProdukImage::findOrFail($id);

        //render view with product
        return view('crudimagebasic.show', compact('produkimage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produkimage = ProdukImage::findOrFail($id);
        return view('crudimagebasic.edit', compact('produkimage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //get product by ID
        $produkimage = ProdukImage::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/produkimage', $image->hashName());

            //delete old image
            Storage::delete('public/produkimage/'.$produkimage->image);

            //update product with new image
            $produkimage->update([
                'image'         => $image->hashName(),
                'description'   => $request->description
            ]);

        } else {

            //update product without image
            $produkimage->update([
                'description'   => $request->description,
            ]);
        }

        //redirect to index
        return redirect()->route('crudimagebasic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produkimage = ProdukImage::findOrFail($id);

        //delete image
        Storage::delete('public/produkimage/'. $produkimage->image);

        //delete product
        $produkimage->delete();

        //redirect to index
        return redirect()->route('crudimagebasic.index');
    }
}
