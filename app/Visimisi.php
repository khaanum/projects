<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $fillable = [
    	'content', 'image'
    ];
    protected $table = 'm-visimisis';
}
