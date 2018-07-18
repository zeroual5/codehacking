@extends('layouts.admin')


@section('content')
    <h1>Edit User</h1>

 <div class="row">
     <div class="col-sm-3 text-center">
         <img src="{{asset($user->photo ? $user->photo->file : 'http://placehold.it/400x400')}}" class="img-responsive img-rounded">
     </div>

     <div class="col-sm-9">

         {!! Form::model($user,['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files'=>true]) !!}
         {{csrf_field()}}
         <div class="row form-group">
             <div class="col-lg-2">
                 {!! Form::label('name', 'Name  ') !!}
             </div>
             <div class="col-lg-8">
                 {!! Form::text('name', null, ['class' => 'form-control']) !!}
             </div>
         </div>

         <div class="row form-group">
             <div class="col-lg-2">
                 {!! Form::label('email', 'Email  ') !!}
             </div>
             <div class="col-lg-8">
                 {!! Form::email('email', $value = null, $attributes = ['class' => 'form-control']) !!}
             </div>
         </div>

         <div class="row form-group">
             <div class="col-lg-2">
                 {!! Form::label('role_id', 'Role  ') !!}
             </div>
             <div class="col-lg-8">
                 {!! Form::select('role_id', $roles, null,['class' => 'form-control']) !!}
                 {{--            {!! Form::select('role_id', $roles, $user->role->id,['class' => 'form-control']) !!}--}}
             </div>
         </div>

         <div class="row form-group">
             <div class="col-lg-2">
                 {!! Form::label('is_active', 'Status  ') !!}
             </div>
             <div class="col-lg-8">
                 {!! Form::select('is_active', [0 => 'Not Active', 1 => 'Active'], null,['class' => 'form-control']) !!}
                 {{--            {!! Form::select('is_active', [0 => 'Not Active', 1 => 'Active'], $user->is_active,['class' => 'form-control']) !!}--}}
             </div>
         </div>

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
                 {!! Form::label('password', 'password  ') !!}
             </div>
             <div class="col-lg-8">
                 {!! Form::password('password',['class' => 'form-control']) !!}
             </div>
         </div>

         <div class="form-group">
             {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
         </div>
         {!! Form::close() !!}
     </div>
 </div>

<div class="row">
    @include('Includes.DisplayErrors')
</div>



@endsection