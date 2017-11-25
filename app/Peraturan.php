<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    protected $fillable = [
    	'title', 'file'
    ];
    protected $table = 'm-peraturans';
}
