<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class WebhomeController extends Controller
{
    //
     public function index()
    {
    	$artikel = Artikel::orderBy('id', 'content')->paginate(4);
    	return view('website.home', compact('artikel'));
    }


}
