<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{

    protected $fillable = [
        'name',
        'genre',
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
