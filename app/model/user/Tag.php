<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    


	//many to many reletion on Tag to Post with Paginate:
    public function posts()
    {
    	return $this->belongsToMany('App\model\user\Post','post_tags')->paginate(3);
    }


    //slug show in url method:
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
