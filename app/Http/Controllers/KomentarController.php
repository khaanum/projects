<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Komentar;

class KomentarController extends Controller
{
    //
	
    
    public function store(Request $request, $id)
    {
        $this->validate($request, array(
                'g-recaptcha-response' => 'required|captcha'
        ));

        $artikel = Artikel::findOrFail($id);

        Komentar::create([
        	'name' => $request->name,
            'comment' => $request->comment,
            'id_artikel' => $id,

        ]);	

        return redirect('web/artikel/'.$artikel->slug);
    }
}
