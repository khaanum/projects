<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class WebartikelController extends Controller
{
    //
    public function index()
    {
    	// $artikel = Artikel::latest()->paginate(1);
        $artikel = Artikel::orderBy('id', 'content')->paginate(1);
    	return view ('website.artikel', compact('artikel'));
    }

    public function getSingle($slug) {
    	// fetch from the DB based on slug
    	$artikel =  Artikel::where('slug', '=', $slug)->first();

    	// return the view and pass in the post object
    	return view('artikel.single')->withArtikel($artikel);
    }

    public function show($id)
    {
        //
        return view ('website.artikel', compact('artikel'));
    }

    public function store(Request $request)
    {
       
    }
}
