<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkh;

class WebpkhController extends Controller
{
    //
    public function index()
    {
    	$pkh = Pkh::all();
    	return view ('website.pkh', compact('pkh'));
    }

    public function show($id)
    {
        // $pkh = pkh::where('title_pkh', $id)->first();
        // $pkh = pkh::with('title_pkh')->where('id', $id)->first();
        $pkh = pkh::find($id);
    	return view('website.pkh_single', compact('pkh'));
    }
}
