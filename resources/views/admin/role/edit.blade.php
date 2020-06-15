@extends('admin.app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Create Role
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Editors</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <a href="{{route('role.index')}}" class="btn btn-success">See All Role</a>
                        </div>
                        <form action="{{url('admin/role/'.$role->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Role Title</label>
                                        <input type="text" class="form-control" id="title" name="name"
                                               value="{{$role->name}}">
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="col-lg-4">
                                        <label for="name">Posts Permissions</label>
                                        @foreach($permissions as $permission)
                                            @if($permission->for == 'post')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"
                                                                  value="{{$permission->id}}"

                                                              @foreach ($role->permissions as $role_permit)
                                                                @if ($role_permit->id == $permission->id)
                                                                  checked
                                                                @endif
                                                            @endforeach

                                                        >{{$permission->name}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="name">User Permissions</label>
                                        @foreach($permissions as $permission)
                                            @if($permission->for == 'user')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"
                                                                  value="{{$permission->id}}"

                                                              @foreach ($role->permissions as $role_permit)
                                                                @if ($role_permit->id == $permission->id)
                                                                  checked
                                                                @endif
                                                            @endforeach
                                                        >{{$permission->name}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">User Permissions</label>
                                        @foreach($permissions as $permission)
                                            @if($permission->for == 'other')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"
                                                                  value="{{$permission->id}}"

                                                      @foreach ($role->permissions as $role_permit)
                                                          @if ($role_permit->id == $permission->id)
                                                          checked
                                                        @endif
                                                    @endforeach

                                                        >{{$permission->name}}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary">
                                <a href='{{route('role.index')}}' class="btn btn-warning">Back</a>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection