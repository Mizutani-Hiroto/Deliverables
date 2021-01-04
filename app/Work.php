<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function Photo()
    {
        return $this->hasMany('App\Photo');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
