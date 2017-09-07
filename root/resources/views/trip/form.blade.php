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