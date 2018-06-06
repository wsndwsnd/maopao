<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	    public $table = 'posts';
        public $primaryKey = 'id';

	    public function users()
	    {
	        return $this->belongsTo('App\Models\User','uid');
	    }

	    public function postsinfo()
	    {
	        // 一对一
	        return $this->hasOne('App\Models\Postsinfo','tid');
	    }
	     public function cates()
	    {
	        return $this->belongsTo('App\Models\Category','cid');
	    }
}

