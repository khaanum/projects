<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;


class SejarahController extends Controller
{
    
    public function index()
    {
        $sejarah = Sejarah::all();
        //return dd($sejarah);
        return view('admin.a-sejarah', compact('sejarah'));
    }

    
    public function create()
    {
        // return view ('admin.tbh_sejarah');
    }

    
    public function store(Request $request)
    {
        // Sejarah::create($request->all());
         return redirect('/admin/sejarah');
    }
    
    public function show($id)
    {
        //
    }

    
    public function edit()   
    {
      $sejarah = Sejarah::first();
      return view('admin.edit_sejarah', compact('sejarah'));
    }

    
    public function update(Request $request)
    {
        $sejarah = Sejarah::first();
        $sejarah->update($request->all());
        // return dd($request->All());
        return redirect()->route('admin.a-sejarah');
    }


    
    public function destroy($id)
    {
        //
    }
}
