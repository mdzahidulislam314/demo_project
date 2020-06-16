<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\user\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('can:posts.tag');
    }


    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.show',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.tag');
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
            'name' => 'required',
            'slug' => 'required',
        ]);

        $tags = new Tag;
        $tags->name = $request->name;
        $tags->slug = $request->slug;
        $tags->save();

        $notification = array(
            'messege' => 'Successfully Tag Created Done..!!',
            'alert-type'=>'success'
        );

        return redirect()->route('tag.create')->with($notification);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $tag = Tag::find($id);
        return view('admin.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();

        $notification = array
        (
            'messege'=>'Successfully Tag Updated done!',
            'alert-type' => 'success'
        );

        return redirect()->route('tag.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag  = Tag::find($id);
        $tag->delete();

        $notification = array
        (
            'messege'=>'Successfully Tag Deleted!',
            'alert-type' => 'success'
        );

        return redirect()->route('tag.index')->with($notification);
    }
}
