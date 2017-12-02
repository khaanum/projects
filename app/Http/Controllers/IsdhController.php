<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Isdh;

class IsdhController extends Controller
{
    
    public function index()
    {
        $isdh = Isdh::all(); //utk manggil semua data isdh
        return view ('admin.a-isdh', compact('isdh'));
    }

    
    public function create()
    {
        //
        return view ('admin.tbh_isdh');
    }

    
    public function store(Request $request)
    {
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
        return redirect('/admin/isdh');
    }

    
    public function show($id)
    {
        //
        // switch ($id) {
        //     case 1:
        //         return view('admin.a-isdh1', compact('isdh'));
        //         break;
        //     case 2:
        //         return view('admin.a-isdh2', compact('isdh'));
        //         break;
        //     case 3:
        //         return view('admin.a-isdh3', compact('isdh'));
        //         break;
        //     case 4:
        //         return view('admin.a-isdh4', compact('isdh'));
        //         break;
        //     case 5:
        //         return view('admin.a-isdh5', compact('isdh'));
        //         break;
        //     default:
        //         # code...
        //         break;
        // }
    }

    
    public function edit($id)
    {
        // $isdh = Isdh::find($id);
        // return view('admin.edit_isdh', compact('isdh','id'));
    }

    public function update(Request $request, $id)
    {
        // $isdh = Isdh::find($id);
        // $isdh->update($request->all()); 
        // return redirect('/admin/isdh');
    }

    
    public function destroy($id)
    {
        $isdh = Isdh::find($id)->delete();
        return redirect('/admin/isdh');
    }
}
