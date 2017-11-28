<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = [
    	'kelasplahan',
    	'tn',
    	'ca',
    	'twa',
    	'sal',
    	'hl',
    	'hpt',
    	'hp',
    	'hpk',
    	'apl',
    	'created_at'
    ];
    
    protected $table = 'lands';
}
