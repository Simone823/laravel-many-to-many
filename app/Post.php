<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'image',
        'publication_date'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Funzione relazione tabella categories
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
