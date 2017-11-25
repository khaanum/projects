<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isdh4 extends Model
{
    //
    protected $fillable = [
    	'no_kls', 'zone', 'w_e', 's_n', 'tphutan', 'kabupaten', 'kecamatan', 'desa'
    ];
    protected $table = 'isdh4s';
}
