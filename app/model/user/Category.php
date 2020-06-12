<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{



	//many to many reletion on Category to Post with Paginate:
	public function posts()
    {
    	return $this->belongsToMany('App\model\user\Post','category_posts')->paginate(3);
    }


    //slug show in url method:
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
