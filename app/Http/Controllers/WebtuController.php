<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class WebtuController extends Controller
{
    //
    public function index()
    {
    	$pegawai = Pegawai::all();
    	return view ('website.pegawai', compact('pegawai'));
    }
}
