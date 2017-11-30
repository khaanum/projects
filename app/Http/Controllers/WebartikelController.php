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
        $artikel = Artikel::orderBy('id', 'content')->paginate(2);
    	return view ('website.artikel', compact('artikel'));
    }

    // 	// return the view and pass in the post object
    // 	return view('artikel.single')->withArtikel($artikel);

    public function show($slug)
    {
        //
        // $artikel = Artikel::where('title', '=', $id)->first();
        // return view ('website.artikel_single', compact('artikel'));
        $artikel = Artikel::where('slug', $slug)->first();

        return view('website.artikel_single', compact('artikel'));
    }

    public function store(Request $request)
    {
       
    }
}
