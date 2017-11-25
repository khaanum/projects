<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh10 extends Model
{
    //
    protected $fillable = [
    	'lokasi', 'kab', 'luas', 'tahun', 'ket'
    ];
    protected $table = 'pkh10s';
}
