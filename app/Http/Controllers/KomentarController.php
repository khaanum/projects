<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\

class KomentarController extends Controller
{
    //
    public function store(Request $request, Artikel $artikel)
    {
       // dd(request('message'));
        Komentar::create([
            'comment' => request('comment')
        ]);
    }
}
