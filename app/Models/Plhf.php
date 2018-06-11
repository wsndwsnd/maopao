<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plhf extends Model
{
    public $table = 'plhf';
     public function users()
    {
        return $this->belongsTo('App\Models\User','uid');
    }
    public function posts()
    {
        return $this->belongsTo('App\Models\Posts','pid');
    }

    
}
