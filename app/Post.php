<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $fillable = [
        'title',
        'body',
        'slug',
        'user_id'
    ];
    // posts - users
    public function user(){
        return $this->belongsTo('App\User');
    }
}
