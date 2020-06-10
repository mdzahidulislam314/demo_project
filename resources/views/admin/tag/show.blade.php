@extends('admin.app')

@section('main_content')

<div class="content-wrapper">
<section class="content-header">
    <h1>
        Tags
{{--                <small>it all starts here</small>--}}
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
            <a href="{{route('tag.create')}}" class="btn btn-success">Add New Tag</a>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
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
                            <th>Tag</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td>{{$loop->index+ 1}}</td>
                            <td>{{$tag->name}}</td>
                            <td>{{$tag->slug}}</td>
                            <td class="text-center">
                                <a href="{{route('tag.edit',$tag->id)}}" title="Edit" class="btn-sm btn-success"><i
                                            class="fa
                                fa-pencil-square"></i>
                                    </a>

                                <form action="{{URL::to('admin/tag/'.$tag->id)}}" method="post"
                                      style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-danger" title="Delete" type="submit" style="border: none;
                                    margin-left:
                                    10px;padding: 4px 11px"
                                    ><i class="fa
                                                fa-minus-circle"></i>
                                        </button>
                                </form>
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