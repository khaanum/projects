<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuspoksi;

class TuspoksiController extends Controller
{
    
    public function index()
    {
        $tuspoksi = Tuspoksi::all();
        return view ('admin.a-tuspoksi', compact('tuspoksi'));
    }

    public function create()
    {
        return view ('admin.tbh_tuspoksi');
    }

    public function store(Request $request)
    {
        pegawai::create($request->all());
        return redirect('/admin/tuspoksi');
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        $tuspoksi = Tuspoksi::first();
      return view('admin.edit_tuspoksi', compact('tuspoksi'));
    }


    public function update(Request $request)
    {
        $tuspoksi = Tuspoksi::first();
        $tuspoksi->update($request->all());
        // return dd($request->All());
        return redirect()->route('admin.a-tuspoksi');
    }

    public function destroy($id)
    {
        //
    }
}
