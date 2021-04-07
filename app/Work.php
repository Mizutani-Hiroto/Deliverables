<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Work extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function likes()
    {
        return $this->belongsToMany('App\User','likes')->withTimestamps();
    }
    public function isLikedBy(?User $user) : bool
    {
        return $user
        ? (bool)$this->likes->where('id', $user->id)->count()
        : false;
    }
}
