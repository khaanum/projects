<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isdh5 extends Model
{
    //
    protected $fillable = [
    	'kls_lahan', 'tn', 'ca', 'twa', 'sal', 'hl', 'hpt', 'hp', 'hpk', 'apl', 'total'
    ];
    protected $table = 'isdh5s';
}
