<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebtuController extends Controller
{
    //
    public function index()
    {
    	return view ('website.pegawai');
    }
}
