<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkh;

class PkhController extends Controller
{
    
    public function index(Request $request)
    {
        $pkh = Pkh::all(); //utk manggil semua data pkh
        return view ('admin.a-pkh', compact('pkh'))->with('i', ($request->input ('page', 1) - 1) * 7) ;
    }

    public function create()
    {
        //
        return view ('admin.tbh_pkh');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, array(
                'title_pkh' => 'required|max:255',
                'file_pkh' => 'required|mimes:pdf'
        ));

        $pkh = new Pkh;
        $pkh->title_pkh = $request->title_pkh;
        if ($request->hasFile('file_pkh')){
            $file = $request->file('file_pkh');
            $location = base_path() . 'public/adminpage/file/';
            $namafile = $request->file_pkh->getClientOriginalName();
            $file->move($location, $namafile);
            $pkh->file_pkh = $namafile;
        }

        $pkh->save();
        // pkh::create($request->all());
        return redirect('/admin/pkh')->with('success','data berhasil ditambah');
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
        $pkh = pkh::find($id)->delete();
        return redirect('/admin/pkh');
    }

    
}
