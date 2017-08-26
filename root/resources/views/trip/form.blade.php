
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

<!-- Program ID Starts-->
<div class="form-group">
    {{ Form::label('program_id', 'Program ID', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('program_id',$repository->programs(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Program']) }}
    </div>
</div>
<!-- Program ID ends-->

<!-- Loading Starts-->
<div class="form-group">
    {{ Form::label('loading', 'Loading Point', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('loading', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Loading ends-->

<!-- Unloading Starts-->
<div class="form-group">
    {{ Form::label('unloading', 'Unloading Point', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('unloading', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Unloading ends-->

<!-- Product Details Starts-->
<div class="form-group">
    {{ Form::label('product', 'Product Details', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('product', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Product Details ends-->

<!-- Empty Container Starts-->
<div class="form-group">
    {{ Form::label('emp_container', 'Empty Container', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('emp_container', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Empty Container ends-->

<!-- Weight Starts-->
<div class="form-group">
    {{ Form::label('weight', 'Product Weight', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('weight', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Weight ends-->

<!-- Fuel Starts-->
<div class="form-group">
    {{ Form::label('fuel', 'Fuel Quantity (Ltr)', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('fuel', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Fuel ends-->

<!-- Fuel Cost Starts-->
<div class="form-group">
    {{ Form::label('fuel_cost', 'Fuel Cost', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('fuel_cost', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Fuel Cost ends-->

<!-- Rent Starts-->
<div class="form-group">
    {{ Form::label('rent', 'Rent', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('rent', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Rent ends-->

<!-- Driver Advance Starts-->
<div class="form-group">
    {{ Form::label('driver_adv', 'Driver Advance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('driver_adv', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Driver Advance ends-->

<!-- Driver Salary Starts-->
<div class="form-group">
    {{ Form::label('driver_salary', 'Driver Salary', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('driver_salary', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Driver Salary ends-->

<!-- Helper Salary Starts-->
<div class="form-group">
    {{ Form::label('helper_salary', 'Helper Salary', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('helper_salary', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Helper Salary ends-->


<!-- Driver Allowance  Starts-->
<div class="form-group">
    {{ Form::label('driver_allow', 'Driver Allowance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('driver_allow', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Helper Salary ends-->

<!-- Helper Allowance  Starts-->
<div class="form-group">
    {{ Form::label('helper_allow', 'Helper Allowance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('helper_allow', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Helper Allowance ends-->

<!-- Labour load unload  Starts-->
<div class="form-group">
    {{ Form::label('labour', 'Labour Load Unload', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('labour', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Labour load unload ends-->

<!-- Toll  Starts-->
<div class="form-group">
    {{ Form::label('toll', 'Toll', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('toll', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Toll ends-->

<!-- Bridge  Starts-->
<div class="form-group">
    {{ Form::label('bridge', 'Bridge', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('bridge', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Bridge ends-->

<!-- Scale  Starts-->
<div class="form-group">
    {{ Form::label('scale', 'Scale', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('scale', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Scale ends-->

<!-- Wheel maintenance  Starts-->
<div class="form-group">
    {{ Form::label('wheel', 'Wheel Maintenance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('wheel', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Wheel maintenance ends-->

<!-- Guard/bazar chada Starts-->
<div class="form-group">
    {{ Form::label('donation', 'Guard/Bazar Donation', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('donation', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Guard/bazar chada ends-->

<!-- Container Charge  Starts-->
<div class="form-group">
    {{ Form::label('container', 'Container Charge', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('container', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Container Charge ends-->

<!-- Port gate  Starts-->
<div class="form-group">
    {{ Form::label('port_gate', 'Post Gate Charge', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('port_gate', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Port gate Charge ends-->

<!-- Driver cost  Starts-->
<div class="form-group">
    {{ Form::label('driver_cost', 'Driver Cost', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('driver_cost', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Container Charge ends-->

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