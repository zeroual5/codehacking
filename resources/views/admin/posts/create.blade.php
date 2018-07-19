@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files'=>true]) !!}

                <div class="row form-group">
                    <div class="col-lg-1">
                        {!! Form::label('photo_id', 'Photo  ') !!}
                    </div>
                    <div class="col-lg-8">
                        {!! Form::file('photo_id', ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-1">
                    {!! Form::label('title', 'Title  ') !!}
                    </div>
                    <div class="col-lg-8">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-1">
                     {!! Form::label('category_id', 'Category  ') !!}
                    </div>
                    <div class="col-lg-8">
                        {!! Form::select('category_id', ['' => 'Choose category', 1 => 'cat'], '',['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-1">
                     {!! Form::label('body', 'Content  ') !!}
                    </div>
                    <div class="col-lg-8">
                     {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('Create post', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}

    @include('Includes.DisplayErrors');
@endsection