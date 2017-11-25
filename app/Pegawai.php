<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
     protected $fillable = [
    	'nama_pegawai', 'nip', 'gol', 'jabatan', 'content'
    ];
    protected $table = 'pegawai';
}
