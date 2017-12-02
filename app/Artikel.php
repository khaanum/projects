<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
   protected $fillable = [
    	'title', 'content', 'image', 'slug'
    ];
    protected $table = 'artikel'; //sesuai dengan nama database

    public function komentar()
    {
    	return $this->hasMany('App\Komentar', 'id_artikel');
    	// return $this->hasMany(Komentar::class);
    }

}
