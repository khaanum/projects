<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebkontakController extends Controller
{
    public function index()
    {
    	return view ('website.kontak');
    }
}
