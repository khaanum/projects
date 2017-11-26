<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebperaturanController extends Controller
{
    //
    public function index()
    {
    	return view ('website.peraturan');
    }
}
