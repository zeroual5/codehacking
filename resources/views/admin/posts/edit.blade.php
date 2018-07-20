@extends('layouts.admin')

@section('content')
    <h1>Edit Post</h1>

    <div class="row">

        <div class="col-sm-3">
            <img src="{{asset($post->photo ? $post->photo->file : 'http://placehold.it/400x400')}}" class="img-responsive img-rounded">
        </div>

        <div class="col-sm-9">

            {!! Form::model($post,['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files'=>true]) !!}

            <div class="row form-group">
                <div class="col-lg-2">
                    {!! Form::label('photo_id', 'Photo  ') !!}
                </div>
                <div class="col-lg-8">
                    {!! Form::file('photo_id', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-2">
                    {!! Form::label('title', 'Title  ') !!}
                </div>
                <div class="col-lg-8">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-2">
                    {!! Form::label('category_id', 'Category  ') !!}
                </div>
                <div class="col-lg-8">
                    {!! Form::select('category_id',$categories, null,['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-2">
                    {!! Form::label('body', 'Content  ') !!}
                </div>
                <div class="col-lg-8">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    {!! Form::submit('Update Post', ['class' => 'btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12']) !!}
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-danger col-lg-12 col-md-12 col-sm-12 col-xs-12"
                            data-toggle="modal" data-target="#myDeleteModal">Delete</button>
                </div>
            </div>
            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">
        @include('Includes.DisplayErrors')
    </div>

    <!-- Modal -->
    <div id="myDeleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Deleting User</h4>
                </div>
                <div class="modal-body">
                    <span>Are you sure that you want delete this post ??</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="javascript:document.getElementById('DeletingForm').submit();">Delete</a>
                    {{--<a href="javascript:document.getElementById('DeletingForm').submit();">--}}
                    {{--<button type="button" class="btn btn-danger">Delete</button>--}}
                    {{--</a>--}}
                    {{--{!! Form::open(['method'=> 'DELETE', 'action'=>['AdminUsersController@destroy', $user->id], 'id'=>'DeletingForm']) !!}--}}
                    {{--{!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}--}}
                    {{--{!! Form::close() !!}--}}
                </div>
            </div>
        </div>
    </div>

    <!-- Form for Delete User -->
    {!! Form::open(['method'=> 'DELETE', 'action'=>['AdminPostsController@destroy', $post->id], 'id'=>'DeletingForm']) !!}

    {!! Form::close() !!}

@stop