<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{

    protected $fillable = [
        'name',
        'genre'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function category()
    {
        return $this->belongsToMany('App\Category');
    }
}
