<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   		 public function userinfo()
	     {
	        // 一对一
	        return $this->hasOne('App\Models\Admin\Userinfo','user_id');
	     }
	   
}
