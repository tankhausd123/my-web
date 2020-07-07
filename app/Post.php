<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function User(){
        return $this->belongsTo('App\User');
    }
}
