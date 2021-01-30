<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Work;
use App\User;

class Follow extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }
    public function work()
    {
        return $this->hasMany('App\Work');
    }
}
