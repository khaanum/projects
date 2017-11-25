<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh2 extends Model
{
    //
    protected $fillable = [
    	'kab', 'fungsi', 'ta', 'luar', 'fungsis', 'jumalah', 'luas', 'tgelang', 'tanggal_ba', 'nomor', 'tanggal', 'pengukuhan'
    ];
    protected $table = 'pkh2s';
}
