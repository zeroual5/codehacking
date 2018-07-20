@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" />
@endsection

@section('content')
    <h1>Upload Photos</h1>

        {!! Form::open(['method' => 'POST', 'action' => 'AdminMediasController@store', 'class'=>'dropzone']) !!}
            {{--{{csrf_field()}}--}}
        {!! Form::close() !!}
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endsection