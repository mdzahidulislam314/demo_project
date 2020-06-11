<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	public function posts()
    {
    	return $this->belongsToMany('App\model\user\Post','category_posts');
    }
}
