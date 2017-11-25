<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visimisi;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = Visimisi::all();
        return view ('admin.a-visimisi', compact('visimisi'));
    }

    public function create()
    {
        // return view ('admin.tbh_visimisi');
    }

    
    public function store(Request $request)
    {
        // pegawai::create($request->all());
        // return redirect('/admin/visimisi');
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        $visimisi = Visimisi::first();
      return view('admin.edit_visimisi', compact('visimisi'));
    }

   
    public function update(Request $request)
    {
        $visimisi = Visimisi::first();
        $visimisi->update($request->all());
        // return dd($request->All());
        return redirect()->route('admin.a-visimisi');
    }

    public function destroy($id)
    {
        //
    }
}
