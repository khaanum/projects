<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh11 extends Model
{
    //
    protected $fillable = [
    	'jpeta', 'skala', 'jumlah', 'lokasi', 'keterangan'
    ];
    protected $table = 'pkh11s';
}
