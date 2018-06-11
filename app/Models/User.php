<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public $table = 'users';
    public $primaryKey = 'id';
    //关联用户详情
     public function userinfo()
    {
        return $this->hasOne('App\Models\Userinfo','user_id');
    }
    //关连贴子表 一对多
    public function userposts()
    {
    	return $this->hasMany('App\Models\Posts','uid');
    }
     //关连文章表 一对多
    public function userarticles()
    {
        return $this->hasMany('App\Models\Articles','uid');
    }

    //收藏文章  多对多
    public function acollects()
    {
        return $this->belongsToMany('App\Models\Articles','a_collect','uid','aid');
    }
    //收藏帖子
    public function pcollects()
    {
        return $this->belongsToMany('App\Models\Posts','p_collect','uid','pid');

    }
}
