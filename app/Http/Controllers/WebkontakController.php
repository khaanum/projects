<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

class WebkontakController extends Controller
{
    public function index()
    {
    	return view ('website.kontak');
    }

}
