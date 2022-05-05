<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Fillable
    protected $fillable = [
        'name',
    ];

    // Funzione relazione tabella posts
    public function posts() {
        return $this->hasMany('App\Post');
    }
}
