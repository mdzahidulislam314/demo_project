<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    

    public function posts()
    {
    	return $this->belongsToMany('App\model\user\Post','post_tags');
    }
}
