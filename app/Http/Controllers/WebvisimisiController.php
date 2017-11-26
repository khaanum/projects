<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebvisimisiController extends Controller
{
    //
    public function index()
    {
    	return view ('website.visimisi');
    }
}
