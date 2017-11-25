<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $fillable = [
    	'title', 'content', 'image'
    ];
    protected $table = 'm-visimisis';
}
