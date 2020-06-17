@extends('user.app')

@section('bg-img',asset($post->image))
@section('title',$post->title)
@section('sub_heading',$post->subtitle)

@section('main-content')
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-10 mx-auto post-top">
                <span><i class="fas fa-user"></i> By:Admin </span>|
                <span class="d-lg-inline"><i class="fas fa-clock"></i>
                    {{$post->created_at->diffForHumans()}}</span> | <span><i class="fas fa-briefcase"></i>
                    Category:</span>

                {{-- Category are here--}}
                @foreach($post->categories as $category)
                <a href="{{ route('category',$category->slug) }}">
                    {{$category->name}}
                </a>
                @endforeach

                <div class="entry-colors">
                    <div class="color_col_1"></div>
                    <div class="color_col_2"></div>
                    <div class="color_col_3"></div>
                </div>

                {{-- Post are Here--}}
                {!! htmlspecialchars_decode($post->body_text) !!}

                <hr>

                {{-- Tags are here--}}
                <p>
                    <span><i class="fa fa-tags" aria-hidden="true"></i>Tags:</span>
                    @foreach($post->tags as $tag)
                    <span class="level-tag-a">
                        <a href="{{ route('tag',$tag->slug) }}" class="a-tag">
                            {{$tag->name}}
                        </a>
                    </span>
                    @endforeach
                </p>
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
                    <h4 class="cat_header">Letest Post</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul style="list-style: none;padding-left:0" class="cat-hover">
                                <li>
                                    <a href=""><i class="fas fa-angle-double-right"></i> Letest post here show</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<hr>
@endsection