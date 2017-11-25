<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh7 extends Model
{
    //
    protected $fillable = [
    	'perusahaan', 'lokasi', 'tahun', 'panjang', 'luas', 'fungsi', 'sk', 'ket'
    ];
    protected $table = 'pkh7s';
}
