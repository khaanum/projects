<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;

class WebsejarahController extends Controller
{
    //
    public function index()
    {
    	$sejarah = Sejarah::all();
    	return view ('website.sejarah', compact('sejarah'));
    }
}
