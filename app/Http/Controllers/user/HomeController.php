<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\model\user\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::where('status',1)->paginate(4);

        return view('user.home',compact('posts'));
    }
}
