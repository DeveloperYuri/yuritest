<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use Illuminate\Http\Request;

class HomeControllerSlug extends Controller
{
    public function index()
    {
        $data['slug'] = Slug::all();
        return view('crudbasicslug.index', $data);
    }
}
