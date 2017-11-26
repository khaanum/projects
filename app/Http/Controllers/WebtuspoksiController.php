<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebtuspoksiController extends Controller
{
    //
    public function index()
    {
    	return view ('website.tuspoksi');
    }
}
