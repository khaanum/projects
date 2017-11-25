<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuspoksi extends Model
{
    protected $fillable = [
    	'title', 'content', 'image'
    ];
    protected $table = 'm-tuspoksis';
}
