@extends('layouts.admin')


@section('content')
    <h1>Edit a Category</h1>

    <!-- Form -->
    {!! Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',$category->id]]) !!}
        <div class="row form-group">
            <div class="col-lg-2">
            {!! Form::label('name','Name : ') !!}
            </div>
            <div class="col-lg-10">
            {!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                {!! Form::submit('Update Category', ['class' => 'btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12']) !!}
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-danger col-lg-12 col-md-12 col-sm-12 col-xs-12"
                        data-toggle="modal" data-target="#myDeleteModal">Delete
                </button>
            </div>
        </div>
    {!! Form::close() !!}
    <!-- /Form -->
{{--@endsection--}}

{{--<!-- Modal -->--}}
{{--<div id="myGlobalModal" class="modal fade" role="dialog">--}}
    {{--<div class="modal-dialog">--}}

        {{--<!-- Modal content-->--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                {{--<h4 class="modal-title">Generate</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}

                {{--<!-- Form -->--}}
                {{--{!! Form::model($category,['method'=>'POST', 'action'=>['AdminCategoriesController@update',$category->id]]) !!}--}}
                {{--<div class="row form-group">--}}
                    {{--<div class="col-lg-2">--}}
                        {{--{!! Form::label('name','Name : ') !!}--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-10">--}}
                        {{--{!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--{!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}--}}
                {{--</div>--}}
            {{--{!! Form::close() !!}--}}
            {{--<!-- /Form -->--}}

            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myDeleteModal" >Delete</button>--}}
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- Modal -->
<div id="myDeleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Deleting category</h4>
            </div>
            <div class="modal-body">

                {!! Form::open(['method'=> 'DELETE','action'=>['AdminCategoriesController@destroy',$category->id], 'id'=>'DeletingForm']) !!}
{{--                {!! Form::open(['method'=> 'DELETE', 'id'=>'DeletingForm']) !!}--}}
                    <span>Are you sure that you want deleting this category ??!</span>
                {!! Form::close() !!}

            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="javascript:document.getElementById('DeletingForm').submit();" >Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection


{{--@section('footer')--}}
{{--<script type="text/javascript">--}}
{{--function clickedRow(id) {--}}
{{--$('#DeletingForm').attr('action','http://localhost:8080/PHPLARAVEL/codehaking/public/admin/categories/' + id);--}}
{{--}--}}
{{--</script>--}}
{{--@endsection--}}