<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = [
    	'name', 'comment', 'id_artikel', 'created_at'
    ];
    protected $table = 'komentar';

    public function artikel()
    {
    	return $this->belongsTo('App\Artikel', 'id_artikel');
    }
}
