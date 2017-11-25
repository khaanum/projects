<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemanfaatan;

class PemanfaatanController extends Controller
{

    public function index()
    {
        $pemanfaatan = Pemanfaatan::all();
        return view ('admin.a-pemanfaatan', compact('pemanfaatan'));
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
