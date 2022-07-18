<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function athlete()
    {
        $this->hasMany('App\Athlete');
    }
}
