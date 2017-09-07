
<!--Date starts-->
<div class="form-group">
    <label class="col-md-3 control-label">Program Date</label>
    <div class="col-md-6">
        <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
            {{ Form::text('date', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"' )) }}
        </div>
    </div>
</div>

<!--Date ends-->

<!-- Serial Starts-->
<div class="form-group">

    <label class="col-md-3 control-label">Serial Number</label>
    <div class="col-md-6">
        {{ Form::text('serial',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Serial ends-->

<!-- Vehicle Name Starts-->
<div class="form-group">
    {{ Form::label('vehicle_id', 'Vehicle Name', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('vehicle_id',$repository->vehicles(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle']) }}
    </div>
</div>
<!-- Vehicle name ends-->
<!-- Driver Starts-->
<div class="form-group">
    {{ Form::label('driver_id', 'Driver', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('driver_id',$repository->drivers(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Driver']) }}
    </div>
</div>
<!-- driver ends-->

<!-- Employee start-->
<div class="form-group">
    {{ Form::label('employee_id', 'SR Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('employee_id',$repository->employees(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select SR']) }}
    </div>
</div>
<!-- Employee ends-->

<!-- party start-->
<div class="form-group">
    {{ Form::label('party_id', 'Party Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('party_id',$repository->parties(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Party']) }}
    </div>
</div>
<!-- party ends-->

<!-- Advance Rent Starts-->
<div class="form-group">
    <label class="col-md-3 control-label">Advance Rent</label>
    <div class="col-md-6">
        {{ Form::text('adv_rent',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Advance Rent ends-->


<!-- Due Rent Starts-->
<div class="form-group">
    <label class="col-md-3 control-label">Due Rent</label>
    <div class="col-md-6">
        {{ Form::text('due_rent',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Advance Rent ends-->


<!-- Total Rent Starts-->
<div class="form-group">

    <label class="col-md-3 control-label">Total Rent</label>
    <div class="col-md-6">
        {{ Form::text('rent',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Total Rent ends-->



<!--Submit button -->
<div class="form-group">
    <div class="col-md-2 col-md-offset-3">
        {{ Form::submit($submitButtonText,['class'=>'form-control btn btn-success']) }}
    </div>
    <div class="col-md-2">
        {{ Form::reset('Reset',['class'=>'form-control btn btn-warning']) }}
    </div>
    <div class="col-md-2">
        <a href="{{ URL::previous() }}" role="button" class="form-control btn btn-danger">Back</a>
    </div>
</div>
<!-- ends-->