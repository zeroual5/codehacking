<!-- Modal Create Category-->
<div id="myCreateCategoryModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Category</h4>
            </div>
            <div class="modal-body">

                <!-- Form -->
                {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
                    <div class="row form-group">
                        <div class="col-lg-2">
                            {!! Form::label('name','Name : ') !!}
                        </div>
                        <div class="col-lg-10">
                            {!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
                <!-- /Form -->

            </div>
        </div>
    </div>
</div>

