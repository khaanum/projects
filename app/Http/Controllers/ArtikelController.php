<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Session;

class ArtikelController extends Controller
{
   
    public function index()
    {
        $artikel = Artikel::all();
        return view ('admin.a-artikel', compact('artikel'));
    }

    public function create()
    {
        return view ('admin.tbh_artikel');
    }

    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
                'title' => 'required|max:255',
                'content' => 'required'
        ));

        //store in the database
        $artikel = new Artikel;
        $artikel->title = $request->title;
        $artikel->content = $request->content;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $location = base_path() . 'public/adminpage/img';
            $namafile = $request->image->getClientOriginalName();
            $file->move($location, $namafile);
            $artikel->image = $namafile;
        }

        $artikel->save();

        Session::flash('success', 'The article was successfully save!');

        return redirect('/admin/artikel');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $artikel = artikel::find($id);
        return view('admin.edit_artikel', compact('artikel','id'));
    }

    public function update(Request $request, $id)
    {
        //
        // $artikel = Artikel::find($id);
        $artikel=Artikel::findOrFail($id);
        // $artikel->update($request->all());

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = time(). '-' .$file->getClientOriginalName();
            $namafile = $file->move(public_path().'public/adminpage/img', $name);
            $artikel->image = $namafile;
        }
        $artikel->save($request->all());
        return redirect('/admin/artikel');
    }

    public function destroy($id)
    {
        //
        $artikel = Artikel::find($id)->delete();
        return redirect('/admin/artikel');
    }
}
