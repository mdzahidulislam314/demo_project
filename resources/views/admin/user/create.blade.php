@extends('admin.app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add Admin
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
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="col-lg-6 offset-lg-2">
                                    <div class="form-group">
                                        <label for="title">User Name:</label>
                                        <input type="text" class="form-control" id="title" name="name"
                                               placeholder="Enter User Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Enter Email Address">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                               placeholder="Enter Phone Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                                               placeholder="Enter Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm">Conform Password:</label>
                                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
                                               placeholder="Enter Password">
                                    </div>


                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <div class="checkbox">
                                            <label ><input type="checkbox" name="status" value="1">Status</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="role">choose Role:</label>
                                        @foreach($roles as $role)
                                            <p><input type="checkbox"
                                              value="{{$role->id}}" name="role[]"><span style="font-size: 15px;
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