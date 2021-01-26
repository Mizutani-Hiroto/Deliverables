<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mypage extends Model
{
    public function user()
    {
        return $this->belongsTo('App/User');
    }
    public function work()
    {
        return $this->belongsTo('App/work');
    }
}
