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
}
