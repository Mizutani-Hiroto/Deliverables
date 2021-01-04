<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function work()
    {
        return $this->hasMany('App\Work');
    }
}
