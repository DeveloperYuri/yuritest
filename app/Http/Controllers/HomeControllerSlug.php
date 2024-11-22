<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeControllerSlug extends Controller
{
    public function index()
    {
        $data['slug'] = Slug::all();
        return view('crudbasicslug.index', $data);
    }

    public function create(){
        return view('crudbasicslug.create');
    }

    public function store(Request $request){
        $slug = Str::of($request->judul)->slug('-');
        Slug::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'isi' => $request->isi
        ]);

        return redirect()->route('slug.index');
    }

    public function show(string $id){
        $data['slug'] = Slug::where(['slug' => $id])->get();
        return view('crudbasicslug.show', $data);
    }

    public function edit(string $id){
        $data['slug']=Slug::find($id);
        return view('crudbasicslug.edit', $data);
    }

    public function update(Request $request, string $id){
        $slug = Slug::find($id);
        $slug->update([
            'judul' => $request->judul,
            'slug' => $slug,
            'isi' => $request->isi
        ]);

        return redirect()->route('slug.index');

    }

    public function destroy(string $id){
        $slug = Slug::find($id);
        $slug->delete();

        return redirect()->route('slug.index');
    }
}
