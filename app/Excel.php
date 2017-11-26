<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    protected $fillable = [
    	'daerah', 'file'
    ];
    protected $table = 'excels';
}
