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
        'publication_date',
        'user_id'
    ];

    // Funzione modifica url con slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Funzione relazione tabella categories
    public function category() {
        return $this->belongsTo('App\Category');
    }

    // Funzione relazione tabella tags
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    // Funzione relazione tabella user
    public function user() {
        return $this->belongsTo('App\User');
    }
}
