<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	  public function posts()
    {
        return $this->hasMany('App\Models\Posts','cid');
    }

    public function cate_title()
    {
        return $this->hasMany('App\Models\Category','id');
    }
}
