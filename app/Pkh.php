<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkh extends Model
{
    protected $fillable = [
    	'title_pkh', 'file_pkh'
    ];
    protected $table = 'pkhs';
}
