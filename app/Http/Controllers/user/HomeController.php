<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\model\user\Post;
use App\model\user\Category;
use App\model\user\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
	//Show All Published Post in home page:
    public function index()
    {
        $categories = Category::all();
        $posts = Post::where('status',1)->paginate(4);
        return view('user.home',compact('posts','categories'));
    }



    //See All Posts Under a Tag:
    public function tag(Tag $tag)
    {
    	$posts = $tag->posts();
		return view('user.home',compact('posts'));
    }


    //See All Posts Under a category:
    public function category(Category $category)
    {
    	$posts = $category->posts();
		return view('user.home',compact('posts'));
    }


    public function contact()
    {
       return view('user.contact');
    }


}
