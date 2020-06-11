<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	public function tags()
	{
		return $this->belongsToMany('App\model\user\Tag','post_tags');
	}

	public function categories()
	{
		return $this->belongsToMany('App\model\user\Category','category_posts');
	}
}
