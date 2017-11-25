<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh8 extends Model
{
    //
    protected $fillable = [
    	'kawasan', 'kab', 'tatabatas', 'identifikasi', 'luas', 'ket'
    ];
    protected $table = 'pkh8s';
}
