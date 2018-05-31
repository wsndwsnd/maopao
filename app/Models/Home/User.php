<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $table = 'users';
    public $primaryKey = 'id';
    //关联用户详情
     public function userinfo()
    {
        return $this->hasOne('App\Models\Home\Userinfo','user_id');
    }
    //关连贴子表 一对多
    public function userposts()
    {
    	return $this->hasMany('App\Models\Home\Posts','uid');
    }
}