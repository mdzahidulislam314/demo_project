<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\model\user\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categoies = Category::all();
        return view('admin.category.show',compact('categoies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
           'name' => 'required',
           'slug' => 'required',
        ]);

        $categories = new Category;
        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->save();

        $notification = array(
            'messege' => 'Successfully Created Done.!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findorfail($id);
        return view('admin.category.edit',compact('category'));
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
        $category =Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        $notification = array
        (
            'messege'=>'Successfully Post Updated done!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        $notification = array
        (
            'messege'=>'Successfully Category Deleted done!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);
    }
}
