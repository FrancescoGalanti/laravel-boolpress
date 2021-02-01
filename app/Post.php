<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    // posts - users
    public function user(){
        return $this->belongsTo('App\User');
    }
}
