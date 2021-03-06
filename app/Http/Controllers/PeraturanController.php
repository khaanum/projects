<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peraturan;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $peraturan = Peraturan::all();
        return view ('admin.a-peraturan', compact('peraturan'))->with('i', ($request->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.tbh_peraturan');
    }

    public function store(Request $request)
    {
        
        $this->validate($request, array(
                'title' => 'required|max:255',
                'file' => 'required',
        ));
        //
        $peraturan = new Peraturan;
        $peraturan->title = $request->title;
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $location = base_path() . 'public/adminpage/file/';
            $namafile = $request->file->getClientOriginalName();
            $file->move($location, $namafile);
            $peraturan->file = $namafile;
        }

        $peraturan->save();
        // peraturan::create($request->all());
        return redirect('/admin/peraturan')->with('success','data berhasil ditambah');
    }

    public function show($id)
    {
        //
    }

   public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
        $peraturan = Peraturan::find($id)->delete();
        return redirect('/admin/peraturan');
    }
}
