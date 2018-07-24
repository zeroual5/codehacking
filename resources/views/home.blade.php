@extends('layouts.app')

@section('content')

    <div class="row">
        @if($posts)
            <div class="mt-5px mb-5px">
                @foreach($posts as $post)
                    <article class="posts">
                        <div class="img-home-posts">
                            {{--<a href="{{route('posts.show',['id'=>$post->slug])}}">--}}
                            <a href="{{route('posts.show',['id'=>$post->id])}}">
                                <img src="{{$post->photo ? asset($post->photo->file) : 'https://placehold.it/400x400'}}">
                            </a>
                        </div>
                        <h2 class="post-title text-white">
                            {{--<a href="{{route('posts.show',['id'=>$post->slug])}}">{{$post->title}}</a>--}}
                            <a href="{{route('posts.show',['id'=>$post->id])}}">{{$post->title}}</a>
                        </h2>
                        <div class="posts-body">
                            <p class="snippetpost">
                                {{$post->body}}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-xs-12 text-center">
            {{$posts->render()}}
        </div>
    </div>


@endsection

@section('popularPosts')
    @include('Includes.popularPosts')
@endsection
