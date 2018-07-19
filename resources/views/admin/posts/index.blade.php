@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
    			<tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>User</th>
                    <th>Category</th>
                    {{--<th>Content</th>--}}
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @if($posts)
                    @foreach($posts as $post)
                        <tr style="cursor:pointer" onclick="location.href='{{route('admin.posts.edit',['id'=>$post->id])}}'" class="pointer">
                            <td>{{$post->id}}</td>
                            <td><img height="50px" width="50px" src="{{$post->photo ? asset($post->photo->file) : 'http://placehold.it/400x400'}}"></td>
                            <td>
                                <a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a>
                                {{--{{$post->title}}--}}
                            </td>
                            <td>{{$post->user ? $post->user ->name : 'has no user'}}</td>
                            <td>{{$post->category ? $post->category->name : 'has no category'}}</td>
                            {{--<td>{{$post->body}}</td>--}}
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>

                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop