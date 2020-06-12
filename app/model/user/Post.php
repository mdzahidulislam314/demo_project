<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{




	//many to many reletion on Post to Tag:
	public function tags()
	{
		return $this->belongsToMany('App\model\user\Tag','post_tags')->withTimestamps();
	}


	//many to many reletion on Post to Catrgory:
	public function categories()
	{
		return $this->belongsToMany('App\model\user\Category','category_posts')->withTimestamps();
	}

	//slug show in url method:
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
