<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	  public function posts()
    {
        return $this->hasMany('App\Models\Admin\Posts','cid');
    }
}
