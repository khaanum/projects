<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pkh;

class PkhController extends Controller
{
    
    public function index()
    {
        $pkh = Pkh::all(); //utk manggil semua data pkh
        return view ('admin.a-pkh', compact('pkh'));
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
        // $pkh = Pkh::find($id);
        // return view('admin.a-pkh1', compact('pkh','id'));
        switch ($id) {
            case 1:
                return view('admin.a-pkh1', compact('pkh'));
                break;
            case 2:
                return view('admin.a-pkh2', compact('pkh'));
                break;
            case 3:
                return view('admin.a-pkh3', compact('pkh'));
                break;
            case 4:
                return view('admin.a-pkh4', compact('pkh'));
                break;
            case 5:
                return view('admin.a-pkh5', compact('pkh'));
                break;
            case 6:
                return view('admin.a-pkh6', compact('pkh'));
                break;
            case 7:
                return view('admin.a-pkh7', compact('pkh'));
                break;
            case 8:
                return view('admin.a-pkh8', compact('pkh'));
                break;
            case 9:
                return view('admin.a-pkh9', compact('pkh'));
                break;
            case 10:
                return view('admin.a-pkh10', compact('pkh'));
                break;
            case 11:
                return view('admin.a-pkh11', compact('pkh'));
                break;
            case 12:
                return view('admin.a-pkh12', compact('pkh'));
                break;
            default:
                # code...
                break;
        }
    }

    public function edit($id)
    {
        $pkh = Pkh::find($id);
        return view('admin.edit_pkh', compact('pkh','id'));
    }

    
    public function update(Request $request, $id)
    {
        $pkh = Pkh::find($id);
        $pkh->update($request->all()); 
        return redirect('/admin/pkh');
    }

    public function destroy($id)
    {
        $pkh = pkh::find($id)->delete();
        return redirect('/admin/pkh');
    }

    
}
