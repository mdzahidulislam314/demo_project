@extends('admin.app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Edit Admin
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <a href="{{route('user.index')}}" class="btn btn-success">See All Users</a>
                        </div>
                        <form action="{{route('user.update',$user->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="col-lg-6 offset-lg-2">
                                    <div class="form-group">
                                        <label for="title">User Name:</label>
                                        <input type="text" class="form-control" id="title" name="name"
                                               value="{{$user->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{$user->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                               value="{{$user->phone}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <div class="checkbox">
                                            <label ><input type="checkbox" name="status" value="1" @if (old('status')==1 || $user->status == 1)
                                                checked @endif  >Status</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="role">choose Role:</label>
                                        @foreach($roles as $role)
                                            <p><input type="checkbox"
                                                      value="{{$role->id}}" name="role[]"

                                                @foreach($user->roles as $user_role)
                                                    @if($user_role->id == $role->id)
                                                        checked
                                                    @endif
                                                @endforeach
                                                > <span style="font-size: 15px;
                                              font-weight: 600;padding-left: 7px;" >{{$role->name}}</span></p>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary">
                                <a href='{{route('tag.index')}}' class="btn btn-warning">Back</a>
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