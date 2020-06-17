@extends('user.app')

@section('bg-img',asset('user/img/Proggraming.jpeg'))
@section('title','Coder,s Blog')
@section('sub_heading','A Blog Theme by Start Jihad')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-1 col-md-10 mx-auto">

            @foreach($posts as$post)
            <div class="post-preview">

                <a href="{{route('post',$post->slug)}}">
                    <h2 class="post-title"> {{$post->title}} </h2>
                    <img src="{{asset($post->image)}}" alt="" height="300px" width="550px">
                    <h3 class="post-subtitle"> {{$post->subtitle}} </h3>
                </a>
                <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a> <small>Created At:</small>{{$post->created_at->diffForHumans()}}</p>
            </div>
                <hr>
            @endforeach


            <!-- Pager -->
            <div class="clearfix">
                {{ $posts->links() }}
            </div>
        </div>

        {{-- sideber start --}}
        <div class="col-lg-3">
            <div class="sideber-cat well">
                <h4 class="cat_header">Categories</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <ul style="list-style: none;padding-left:0" class="cat-hover">
                            <li>
                                <a href="" id="cat-title" style="text-decoration: none">
                                    @foreach ($categories as $category )
                                        <span class="level" style="margin-top: 5px">{{$category->name}}</span>
                                    @endforeach
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sideber-cat well">
                <h4 class="cat_header">Popular Post</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <ul style="list-style: none;padding-left:0" class="cat-hover">
                            <li>
                                <a href=""><i class="fas fa-angle-double-right"></i> Popular post here show</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<hr>
@endsection