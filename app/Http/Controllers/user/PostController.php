<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\model\user\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)

    {

        return view('user.post',compact('post'));
    }
}
