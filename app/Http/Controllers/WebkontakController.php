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

    public function edit()   
    {
      $kontak = Kontak::find($id);
      return view('website.kontak', compact('kontak'));
    }

    
    public function update(Request $request)
    {
        $kontak = Kontak::find();
        $kontak->update($request->all());
        return redirect()->route('admin.dashboard');
    }

}
