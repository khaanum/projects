<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeborganisasiController extends Controller
{
    //
    public function index()
    {
    	return view ('website.organisasi');
    }
}
