<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
    	'name', 'comment'
    ];
    protected $table = 'komentars';

    public function artikels()
    {
    	return $this->belongsTo('App\Artikel');
    }
}
