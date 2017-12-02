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
    public function index()
    {
        $peraturan = Peraturan::all();
        return view ('admin.a-peraturan', compact('peraturan'));
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
        return redirect('/admin/peraturan');
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
