<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view ('admin.a-kontak', compact('kontak'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
