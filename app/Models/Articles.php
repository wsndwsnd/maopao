<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
     public $table = 'article';
     // 多对多
	public function shoucang()
    {
    	return $this->hasMany('App\Models\Acollect','aid');
    }
}
