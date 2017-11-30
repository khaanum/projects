<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
    	'name', 'comment'
    ];
    protected $table = 'komentars';

    public function artikel()
    {
    	return $this->belongsTo(Artikel::class);
    }
}
