<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisasi;

class OrganisasiController extends Controller
{
    
    public function index()
    {
       $organisasi = Organisasi::all();
        return view ('admin.a-organisasi', compact('organisasi'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        $organisasi = Organisasi::first();
        return view('admin.edit_organisasi', compact('organisasi'));
    }

    public function update(Request $request)
    {
        $organisasi = Organisasi::first();
        $organisasi->update($request->all());
        // return dd($request->All());
        return redirect()->route('admin.a-organisasi');
    }

    public function destroy($id)
    {
        //
    }
}
