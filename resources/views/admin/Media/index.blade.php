@extends('layouts.admin')

@section('content')
    <h1>Photos</h1>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
    			<tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if($photos)
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{$photo->id}}</td>
                            <td><img height="50px" src="{{asset($photo->file)}}" alt=""></td>
                            <td>{{$photo->created_at->diffForHumans()}}</td>
                            <td class="text-right">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['AdminMediasController@destroy', $photo->id], 'class'=>'dropzone']) !!}
                                    {!! Form::submit('DELETE', ['class' => 'btn btn-danger ']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection