<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuspoksi extends Model
{
    protected $fillable = [
    	'content', 'image'
    ];
    protected $table = 'm-tuspoksis';
}
