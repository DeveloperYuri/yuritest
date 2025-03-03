<?php

namespace App\Http\Controllers;

use App\Models\ProdukImageSlug;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProdukImageSlugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkimageslug = ProdukImageSlug::all();

        return view('crudimagebasicslug.index', compact('produkimageslug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crudimagebasicslug.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/produkimageslug', $image->hashName());
        $slug = Str::of($request->description)->slug('-');


        //create product
        ProdukImageSlug::create([
            'image'         => $image->hashName(),
            'description'   => $request->description,
            'slug'          => $slug
        ]);

        //redirect to index
        return redirect()->route('crudimagebasicslug.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $article = ProdukImageSlug::where('slug', $slug)->first();

        $data['getDescription'] = $article->description;
        $data['getImage'] = $article->image;

        // dd($data);

        return view('crudimagebasicslug.show', $data);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produkimageslug = ProdukImageSlug::findOrFail($id);
        return view('crudimagebasicslug.edit', compact('produkimageslug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //get product by ID
         $produkimageslug = ProdukImageSlug::findOrFail($id);

         //check if image is uploaded
         if ($request->hasFile('image')) {
 
             //upload new image
             $image = $request->file('image');
             $image->storeAs('public/produkimageslug', $image->hashName());
             $slug = Str::of($request->description)->slug('-');

 
             //delete old image
             Storage::delete('public/produkimageslug/'.$produkimageslug->image);
 
             //update product with new image
             $produkimageslug->update([
                 'image'         => $image->hashName(),
                 'description'   => $request->description,
                 'slug'          => $slug
             ]);
 
         } else {

            $slug = Str::of($request->description)->slug('-');
 
             //update product without image
             $produkimageslug->update([
                 'description'   => $request->description,
                 'slug'          => $slug
             ]);
         }
 
         //redirect to index
         return redirect()->route('crudimagebasicslug.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produkimageslug = ProdukImageSlug::findOrFail($id);

        //delete image
        Storage::delete('public/produkimageslug/'. $produkimageslug->image);

        //delete product
        $produkimageslug->delete();

        //redirect to index
        return redirect()->route('crudimagebasicslug.index');
    }
}
