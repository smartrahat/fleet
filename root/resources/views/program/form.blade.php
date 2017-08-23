<!-- Vehicle Name Starts-->
<div class="form-group">
    {{ Form::label('name', 'Vehicle Name', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('vehicle_id',$repository->vehicles(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle']) }}
    </div>
</div>
<!-- Vehicle name ends-->
<!-- Driver Starts-->
<div class="form-group">
    {{ Form::label('name', 'Driver', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('driver_id',$repository->drivers(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Driver']) }}
    </div>
</div>
<!-- driver ends-->
<!-- party start-->
<div class="form-group">
    {{ Form::label('name', 'Parties', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('party_id',$repository->parties(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Party']) }}
    </div>
</div>
<!-- party ends-->

<!-- Employee start-->
<div class="form-group">
    {{ Form::label('name', 'SR Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('employee_id',$repository->employees(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select SR']) }}
    </div>
</div>
<!-- Employee ends-->

<!--Road permit starts-->
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

<!--Road permit ends-->

<!-- Engine Number Starts-->
<div class="form-group">

    <label class="col-md-3 control-label">Serial Number</label>
    <div class="col-md-6">
        {{ Form::text('serial',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Engine Number ends-->
<!--Submit button -->
<div class="form-group">
    <div class="col-md-2 col-md-offset-3">
        {{ Form::submit($submitButtonText,['class'=>'form-control btn btn-success']) }}
    </div>
    <div class="col-md-2">
        {{ Form::reset('Reset',['class'=>'form-control btn btn-warning']) }}
    </div>
    <div class="col-md-2">
        <input type="Button" value="Cancel"  class="form-control btn btn-danger">
    </div>
</div>
<!-- ends-->