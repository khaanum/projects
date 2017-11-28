<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peraturan;

class WebperaturanController extends Controller
{
    //
    public function index()
    {
    	 $peraturan = Peraturan::all();
    	return view ('website.peraturan', compact('peraturan'));
    }
}
