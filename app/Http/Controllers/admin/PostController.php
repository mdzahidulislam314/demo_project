<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\user\Category;
use App\model\user\Post;
use App\model\user\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.show',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories = Category::all();
        return view('admin.post.post',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate
        ([
            'title' => 'required|unique:posts',
            'subtitle' => 'required',
            'slug' => 'required',
            'body_text' => 'required',
        ]);

        $posts = new Post;
        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->slug = $request->slug;
        $posts->body_text = $request->body_text;
        $posts->status = $request->status;
        $posts->save();
    
        $notification = array
        (
            'messege'=>'Successfully Post Created done!',
            'alert-type' => 'success'
        );

        return redirect()->route('post.create')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorfail($id);
        $categories = Category::all();
       
        return view('admin.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storlaage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $posts = Post::find($id);
        $posts->title = $request->title;
        $posts->subtitle = $request->subtitle;
        $posts->slug = $request->slug;
        $posts->body_text = $request->body_text;
        $posts->status = $request->status;
        $posts->save();

        $notification = array
        (
            'messege'=>'Successfully Post Updated done!',
            'alert-type' => 'success'
        );

        return redirect()->route('post.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findorfail($id);
        $posts->delete();
        return redirect()->back();
    }
}
