<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Entities\User');
        // return $this->belongsTo('App\Entities\User', 'user_id' ,'id');
    }
}
