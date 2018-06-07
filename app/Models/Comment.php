<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'a_comment';
    
    public function users()
    {
        return $this->belongsTo('App\Models\User','uid');
    }
    public function articles()
    {
        return $this->belongsTo('App\Models\Articles','aid');
    }
    
}
