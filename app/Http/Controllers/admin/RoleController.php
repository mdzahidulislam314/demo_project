<?php

namespace App\Http\Controllers\admin;

use App\model\admin\Permission;
use App\model\admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

        $roles = Role::all();
        return view('admin.role.show',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $permissions = Permission::all();
        return view('admin.role.create',compact('permissions'));
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
        ]);

        $roles = new Role;
        $roles->name = $request->name;
        $roles->save();
        $roles->permissions()->sync($request->permission);

        $notification = array
        (
            'messege'=>'Successfully Role Created done!',
            'alert-type' => 'success'
        );

        return redirect()->route('role.create')->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::find($id);
        return view('admin.role.edit',compact('role','permissions'));
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

        $validatedData = $request->validate
        ([
            'name' => 'required',
        ]);


        $role =Role::find($id);
        $role->name = $request->name;
        $role->save();
        $role->permissions()->sync($request->permission);

        $notification = array
        (
            'messege'=>'Successfully Post Updated done!',
            'alert-type' => 'success'
        );

        return redirect()->route('role.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        $notification = array
        (
            'messege'=>'Successfully Role Deleted done!',
            'alert-type' => 'success'
        );

        return redirect()->route('role.index')->with($notification);


    }
}
