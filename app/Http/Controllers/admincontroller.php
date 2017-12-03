<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use App\Pegawai;
use App\Artikel;
use carbon\carbon;

class admincontroller extends Controller
{
    //
    public function index()
    {
    	
    	$kontak =  Kontak::All();
    	foreach ($kontak as $data) {
    		$hitungdata = $data->count();
    	}
        
        $pegawai =  Pegawai::All();
        foreach ($pegawai as $datapegawai) {
            $hitungpegawai = $datapegawai->count();
        }
        
        $artikel =  Artikel::All();
        foreach ($artikel as $dtartikel) {
            $hitungartikel = $dtartikel->count();
        }
        
        $sekarang = Carbon::now('Asia/Jakarta');
        // foreach ($sekarang as $hariini) {
        //     $now = $hariini->toDateString();
        // }

    	return view('admin.dashboard', compact('kontak', 'hitungdata', 'hitungpegawai', 'hitungartikel', 'sekarang'));
    }

}
