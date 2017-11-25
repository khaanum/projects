<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $fillable = [
    	'title', 'content', 'image'
    ];
    protected $table = 'm-organisasis'; //sesuai dengan nama database
}
