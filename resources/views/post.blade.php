@extends('layouts.app')

@section('content')
    <div class="bg-navbar">
        <div class="row">
            {{--<div class="col-sm-2 col-sm-offset-8 bg-danger" style="height: 50px;"></div>--}}
            <div class="col-sm-2 col-xs-4 b-t-previous text-center p-10">
                <a href="#">
                    <span>PREVIOUS</span>
                </a>
            </div>
            <div class="col-sm-2 col-xs-4 b-t-next text-center p-10">
                <a href="#">
                    <span>NEXT</span>
                </a>
            </div>
        </div>
        <article class="row">

            {{--adsence post top--}}
            <div class="row mt-5px">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
                    <!-- 336 x 280 blogger -->
                    <ins class='adsbygoogle bg-success' data-ad-client='ca-pub-9571765298321805' data-ad-slot='1626463558'
                         style='display:inline-block;width:100%;height:320px'></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>

            {{--image post--}}
            <div class="row headerPost mb-5px">
                <img src="{{$post->photo ? asset($post->photo->file) : 'https://placehold.it/400x400'}}">
            </div>

            {{--title post--}}
            <h1 class="col-xs-12 text-center text-white post-title">
                <a href="{{route('posts.show',['id' =>$post->id])}}">{{$post->title}}</a>
            </h1>

            {{--adsence post between--}}
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
                    <!-- 300 x 600 for blogger -->
                    <ins class='adsbygoogle bg-success' data-ad-client='ca-pub-9571765298321805' data-ad-slot='7543815277' style='display:inline-block;width:100%;height:600px'></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>

            {{--content--}}
            <div class="row text-white p-10">
                <p class="p-20">
                    {{$full ? $post->body : str_limit($post->body, '80', '...')}}
                </p>
            </div>

            {{--link read more--}}
            <div class="row text-white text-center showVideoLink">
                <div class="col-sx-12">
                    <a href="?fullvideo">Show The Video</a>
                </div>
            </div>

            {{--adsence post bottom--}}
            <div class="row mt-5px">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
                    <!-- 336 x 280 blogger -->
                    <ins class='adsbygoogle bg-success' data-ad-client='ca-pub-9571765298321805' data-ad-slot='1626463558'
                         style='display:inline-block;width:100%;height:320px'></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </article>
    </div>
@endsection

@section('popularPosts')
    @include('Includes.popularPosts')
@endsection
