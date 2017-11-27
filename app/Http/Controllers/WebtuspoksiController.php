<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuspoksi;

class WebtuspoksiController extends Controller
{
    //
    public function index()
    {
    	$tuspoksi = Tuspoksi::all();
    	return view ('website.tuspoksi', compact('tuspoksi'));
    }
}
