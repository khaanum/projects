<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Isdh;

class WebisdhController extends Controller
{
    public function index()
    {
    	$isdh = Isdh::all();
    	return view ('website.isdh', compact('isdh'));
    }

    public function show($id)
    {
        // $isdh = Isdh::where('title_isdh', $id)->first();
        // $isdh = Isdh::with('title_isdh')->where('id', $id)->first();
        $isdh = Isdh::find($id);
    	return view('website.isdh_single', compact('isdh'));
    }
    
}
