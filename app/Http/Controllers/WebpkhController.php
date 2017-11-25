<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpkhController extends Controller
{
    //
    public function index()
    {
    	return view ('website.pkh');
    }
}
