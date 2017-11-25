<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ppkh;

class PpkhController extends Controller
{
    
    public function index()
    {
        $ppkh = Ppkh::all();
        return view ('admin.a-ppkh', compact('ppkh'));
    }

    
    public function create()
    {
        return view ('admin.tbh_kph1');
    }

    
    public function store(Request $request)
    {
        ppkh::create($request->all());
        return redirect('/admin/ppkh');
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
    }
}
