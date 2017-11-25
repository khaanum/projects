<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh4 extends Model
{
    //
    protected $fillable = [
    	'kegiatan', 'no_reg', 'kw_hutan', 'fungsi', 'luas', 'lokasi', 'panjang', 'b_acara', 'keterangan'
    ];
    protected $table = 'pkh4s';
}
