@extends('admin.app')

@section('main_content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Tags
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    @can('posts.create',Auth::user())
                        <a href="{{route('post.create')}}" class="btn btn-success">Add New Post</a>
                    @endcan
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table With Full Features</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL.No</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Status</th>
                                    <th>Created_at</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                @foreach($posts as $post)
                                        <td>{{$loop->index+ 1}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->subtitle}}</td>
                                        <td>{{$post->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>{{$post->created_at}}</td>

                                        <td>
                                        @can('posts.update',Auth::user())
                                            <a href="{{route('post.edit',$post->id)}}" class="btn-sm btn-success"><i
                                                        class="fa
                                            fa-pencil-square"></i> </a>
                                        @endcan

                                        @can('posts.delete',Auth::user())
                                            <form action="{{URL::to('admin/post/'.$post->id)}}" method="post"
                                                  style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-sm btn-danger" type="submit" style="border: none;margin-left:
                                    10px;padding: 4px 11px" onclick="return confirm('Are You Sure Want To delete This?')
"><i class="fa
                                                fa-minus-circle"></i>
                                                </button>
                                            </form>
                                        @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="box-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>


@endsection