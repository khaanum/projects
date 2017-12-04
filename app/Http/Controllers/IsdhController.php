<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Isdh;

class IsdhController extends Controller
{
    
    public function index(Request $request)
    {
        $isdh = Isdh::all(); //utk manggil semua data isdh
        return view ('admin.a-isdh', compact('isdh'))->with('i', ($request->input('page', 1) - 1) * 7);
    }

    
    public function create()
    {
        //
        return view ('admin.tbh_isdh');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, array(
                'title_isdh' => 'required|max:255',
                'file_isdh' => 'required',
        ));

        //
        $isdh = new Isdh;
        $isdh->title_isdh = $request->title_isdh;
        if ($request->hasFile('file_isdh')){
            $file = $request->file('file_isdh');
            $location = base_path() . 'public/adminpage/file/';
            $namafile = $request->file_isdh->getClientOriginalName();
            $file->move($location, $namafile);
            $isdh->file_isdh = $namafile;
        }

        $isdh->save();
        // isdh::create($request->all());
        return redirect('/admin/isdh')->with('success','data berhasil ditambah');
    }

    
    public function show($id)
    {
        
    }

    public function edit($id)
    {
    
    }

    public function update(Request $request, $id)
    {
     
    }

    public function destroy($id)
    {
        $isdh = Isdh::find($id)->delete();
        return redirect('/admin/isdh');
    }

}
