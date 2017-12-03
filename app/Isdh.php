<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isdh extends Model
{
    protected $fillable = [
    	'title_isdhh', 'file_isdh'
    ];
    protected $table = 'isdhs';
}

