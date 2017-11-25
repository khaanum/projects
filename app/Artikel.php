<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
   protected $fillable = [
    	'title', 'content', 'image', 'slug', 'id_komentar'
    ];
    protected $table = 'artikels'; //sesuai dengan nama database

    public function komentars()
    {
    	return $this->hasMany('App\Komentar');
    }
}
