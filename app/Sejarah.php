<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $fillable = [
    	'content', 'image'
    ];
    protected $table = 'm-sejarahs';
}
