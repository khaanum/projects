<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    
    public function index(Request $request)
    {
        $pegawai = Pegawai::all(); //utk manggil semua data pegawai
        return view ('admin.a-pegawai', compact('pegawai'))->with('i', ($request->input('page', 1) - 1) * 7);
    }

    
    public function create() //button tambah data pegawai
    {
        
        return view ('admin.tbh_pegawai');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, array(
                'nama_pegawai' => 'required|max:255',
                'nip' => 'required',
                'gol' => 'required',
                'jabatan' => 'required'
        ));
        // dd($request->all());
        pegawai::create($request->all());
        return redirect('/admin/pegawai')->with('success','data berhasil ditambah');
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
        return redirect('/admin/pegawai')->with('yups', 'data berhasil di ubah');
    }

    
    public function destroy($id) // button delete data pegawai
    {
        $pegawai = Pegawai::find($id)->delete();
        return redirect('/admin/pegawai');
    }
}
