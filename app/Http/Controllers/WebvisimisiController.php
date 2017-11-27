<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visimisi;

class WebvisimisiController extends Controller
{
    //
    public function index()
    {
    	$visimisi = Visimisi::all();
    	return view ('website.visimisi', compact('visimisi'));
    }
}
