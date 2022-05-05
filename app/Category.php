<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Fillable
    protected $fillable = [
        'name',
    ];

    // Funzione modifica url con slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Funzione relazione tabella posts
    public function posts() {
        return $this->hasMany('App\Post');
    }
}
