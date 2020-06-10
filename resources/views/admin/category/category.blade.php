@extends('admin.app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Create Category
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
                            <a href="{{route('category.index')}}" class="btn btn-success">See All Category</a>
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

                        <form action="{{route('category.store')}}" method="post">
                            @csrf
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="title">Category Name</label>
                                    <input type="text" class="form-control" id="title" name="name"
                                           placeholder="Enter Category Name">
                                </div>

                                <div class="form-group">
                                    <label for="subtitle">Category Slug</label>
                                    <input type="text" class="form-control" id="subtitle" name="slug"
                                           placeholder="Enter Category Slug">
                                </div>

                            </div>
                        </div>

                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary">
                                <a href='{{route('category.index')}}' class="btn btn-warning">Back</a>
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