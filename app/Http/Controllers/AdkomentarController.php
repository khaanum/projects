<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class AdkomentarController extends Controller
{
    //
    public function destroy($id)
    {
        //
        $komentar = Komentar::findOrFail($id)->delete();
        return back();
    }
}
