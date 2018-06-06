<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
     public $table = 'article';

       public function comments()
    {
        return $this->hasMany('App\Models\Comment','aid');
    }
}
