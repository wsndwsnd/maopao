<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	    public function users()
	    {
	        return $this->belongsTo('App\Models\Admin\User','uid');
	    }

	    public function postsinfo()
	    {
	        // 一对一
	        return $this->hasOne('App\Models\Admin\Postsinfo','tid');
	    }
	     public function cates()
	    {
	        return $this->belongsTo('App\Models\Admin\Category','cid');
	    }
}

