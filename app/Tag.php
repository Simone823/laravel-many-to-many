<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Funzione relazione tabella posts
    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
