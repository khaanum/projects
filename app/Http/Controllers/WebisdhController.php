<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebisdhController extends Controller
{
    public function index()
    {
    	return view ('website.isdh');
    }
    
}
