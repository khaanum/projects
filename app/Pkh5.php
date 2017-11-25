<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh5 extends Model
{
    //
    protected $fillable = [
    	't_keg', 'n_reg', 'kw_hutan', 'fungsi', 'luas', 'lokasi', 'batas'
    ];
    protected $table = 'pkh5s';
}
