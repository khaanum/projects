<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh1 extends Model
{
    //
    protected $fillable = [
    	'kw_hutan', 'tghk', 'rtrwp', 'paduserasi', 'penunjukan', 'keterangan'
    ];
    protected $table = 'pkh1s';
}
