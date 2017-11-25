<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh9 extends Model
{
    //
    protected $fillable = [
    	'perusahaan', 'penggunaan', 'surat', 'no_tgl', 'jk_waktu', 'kompensasi', 'keterangan'
    ];
    protected $table = 'pkh9s';
}
