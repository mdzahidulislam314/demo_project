<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\model\user\Post;
use App\model\user\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)

    {

        $categories = Category::all();
        return view('user.post',compact('post','categories'));
    }
}
