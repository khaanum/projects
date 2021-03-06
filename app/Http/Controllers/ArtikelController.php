<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Session;

class ArtikelController extends Controller
{
   
    public function index(Request $request)
    {
        $artikel = Artikel::all();
        return view ('admin.a-artikel', compact('artikel'))->with('i', ($request->input('page', 1) - 1) * 7);
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
                'content' => 'required',
                'image' => 'image|mimes:jpg,png,jpeg'
        ));

        $slug = str_slug($request->title, '-');

        if(Artikel::where('slug', $slug)->first() !=null)
            $slug = $slug . '-' .time();

        //store in the database
        $artikel = new Artikel;
        $artikel->title = $request->title;
        $artikel->slug = $slug;
        $artikel->content = $request->content;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $location = base_path() . 'public/adminpage/img';
            $namafile = $request->image->getClientOriginalName();
            $file->move($location, $namafile);
            $artikel->image = $namafile;
        }

        $artikel->save();

        return redirect('/admin/artikel')->with('success','data berhasil ditambah');
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
        return redirect('/admin/artikel')->with('yups', 'data berhasil di ubah');
    }

    public function destroy($id)
    {
        //
        $artikel = Artikel::findOrFail($id)->delete();
        return back();
    }
}
