@extends('user.app')

@section('bg-img',asset('user/img/post-bg.jpg'))
@section('title',$post->title)
@section('sub_heading',$post->subtitle)

@section('main-content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h5 class="d-lg-inline">Created at: </h5>{{$post->created_at->diffForHumans()}}|

                    {{-- Category are here--}}
                    @foreach($post->categories as $category)
                    <a href="{{ route('category',$category->slug) }}">
                        {{$category->name}}
                    </a>
                    @endforeach

                    <hr>

                    {{-- Post are Here--}}
                    {!! htmlspecialchars_decode($post->body_text) !!}

                    <hr>

                    {{-- Tags are here--}}
                
                    <p>
                        <span><i class="fa fa-tags" aria-hidden="true"></i>Tags:</span>
                    @foreach($post->tags as $tag)
                    <span class="level">
                         <a href="{{ route('tag',$tag->slug) }}" class="a-tag">
                             {{$tag->name}}
                         </a>
                     </span>
                        @endforeach
                    </p>
            </div>
            </div>
        </div>
    </article>

    <hr>
@endsection