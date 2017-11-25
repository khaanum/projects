<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
     protected $fillable = [
    	'name', 'email', 'phone', 'message'
    ];
    protected $table = 'm-kontaks';
}
