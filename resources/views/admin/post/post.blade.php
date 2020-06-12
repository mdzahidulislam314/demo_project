@extends('admin.app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Create Post

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
                            <a href="{{route('post.index')}}" class="btn btn-success">GO To All Post</a>
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

                        <form action="{{route('post.store')}}" method="post">
                            @csrf

                            <div class="box-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="subtitle">Post Sub Title</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle"
                                               placeholder="Sub Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">Post Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                               placeholder="Slug">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <br>
                                    <div class="form-group">
                                        <div class="pull-right">
                                            <label for="image">File input</label>
                                            <input type="file" name="image" id="image">
                                        </div>
                                        <div class="checkbox pull-left">
                                            <label>
                                                <input type="checkbox" name="status" value="1"> Publish
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Select Tags: </label>
                                            <select class="form-control select2 select2-hidden-accessible" multiple=""
                                                    data-placeholder="Select a State" style="width: 100%;" tabindex="-1"
                                                    aria-hidden="true" name="tags[]">

                                                @foreach($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Select Category: </label>
                                            <select class="form-control select2 select2-hidden-accessible" multiple=""
                                                    data-placeholder="Select a State" style="width: 100%;" tabindex="-1"
                                                    aria-hidden="true" name="categories[]">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Write Post Description:</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-default btn-sm" data-widget="remove"
                                                data-toggle="tooltip" title="Remove">
                                            <i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body pad">
                                <textarea name="body_text"
                                          style="width: 100%;
                                 height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;
                                 padding: 10px;" id="editor1"></textarea>
                                </div>
                            </div>

                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary">
                                <a href='#' class="btn btn-warning">Back</a>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->

@endsection