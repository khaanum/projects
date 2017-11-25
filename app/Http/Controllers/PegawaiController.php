<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    
    public function index()
    {
        $pegawai = Pegawai::all(); //utk manggil semua data pegawai
        return view ('admin.a-pegawai', compact('pegawai'));
    }

    
    public function create() //button tambah data pegawai
    {
        
        return view ('admin.tbh_pegawai');
    }

    
    public function store(Request $request)
    {
        // dd($request->all());
        pegawai::create($request->all());
        return redirect('/admin/pegawai');
    }

   
    public function show($id)//
    {
        //
    }

    
    public function edit($id) //button edit data pegawai
    {
        $pegawai = Pegawai::find($id);
        return view('admin.edit_pegawai', compact('pegawai','id'));
    }

    
    public function update(Request $request, $id) //button save setelah edit data pegawai
    {
        // return $request->all(); //untuk mengecek data 
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all()); 
        return redirect('/admin/pegawai');
    }

    
    public function destroy($id) // button delete data pegawai
    {
        $pegawai = Pegawai::find($id)->delete();
        return redirect('/admin/pegawai');
    }
}
