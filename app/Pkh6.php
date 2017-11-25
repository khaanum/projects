<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh6 extends Model
{
    //
    protected $fillable = [
    	'lokasi', 'luas', 'ca', 'hl', 'hpt', 'hpb', 'hpk', 'keterangan'
    ];
    protected $table = 'pkh6s';
}
