<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebartikelController extends Controller
{
    //
    public function index()
    {
    	return view ('website.artikel');
    }
}
