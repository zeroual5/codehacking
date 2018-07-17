@extends('layouts.admin')


@section('content')
    <h1>Create an User</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}
    {{csrf_field()}}
        <div class="row form-group">
            <div class="col-lg-1">
            {!! Form::label('name', 'Name  ') !!}
            </div>
            <div class="col-lg-8">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-1">
             {!! Form::label('email', 'Email  ') !!}
            </div>
            <div class="col-lg-8">
{{--             {!! Form::text('email', null, ['class' => 'form-control']) !!}--}}
             {!! Form::email('email', $value = null, $attributes = ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-1">
             {!! Form::label('role_id', 'Role  ') !!}
            </div>
            <div class="col-lg-8">
{{--             {!! Form::text('role_id', null, ['class' => 'form-control']) !!}--}}
{{--             {!! Form::select('role_id', ['1' => 'admin', '2' => 'author', '3' => 'sub'], '2',$attributes = ['class' => 'form-control']) !!}--}}
             {!! Form::select('role_id', ['' => 'Choose Role'] + $roles, '',['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-1">
             {!! Form::label('is_active', 'Status  ') !!}
            </div>
            <div class="col-lg-8">
{{--             {!! Form::text('is_active', null, ['class' => 'form-control']) !!}--}}
             {!! Form::select('is_active', ['0' => 'Not Active', '1' => 'Active'], '0',['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-1">
              {!! Form::label('file', 'Photo  ') !!}
            </div>
            <div class="col-lg-8">
             {!! Form::file('file', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row form-group">
            <div class="col-lg-1">
             {!! Form::label('password', 'password  ') !!}
            </div>
            <div class="col-lg-8">
             {!! Form::password('password',['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @include('Includes.DisplayErrors')

@endsection