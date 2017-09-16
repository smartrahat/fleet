<!-- Program ID Starts-->
<div class="form-group {{$errors->has('program_id')?'has-error':''}}">
    {{ Form::label('program_id', 'Program ID', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('program_id',$repository->programs(),null,['class'=>'form-control populate','id' =>'program_id','data-plugin-selectTwo','placeholder'=>'Select Program']) }}
        @if($errors->has('program_id'))
            <span class="help-block"><strong>{{$errors->first('program_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Program ID ends-->

<!-- Fuel Cost Starts-->
<div class="form-group {{$errors->has('fuel_cost')?'has-error':''}}">
    {{ Form::label('fuel_cost', 'Fuel Cost', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('fuel_cost', null, array('class' => 'form-control','id' =>'fuel_cost')) }}
        @if($errors->has('fuel_cost'))
            <span class="help-block"><strong>{{$errors->first('fuel_cost')}}</strong></span>
        @endif
    </div>
</div>
<!-- Fuel Cost ends-->

<!-- Driver Allowance  Starts-->
<div class="form-group {{$errors->has('driver_allow')?'has-error':''}}">
    {{ Form::label('driver_allow', 'Driver Allowance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('driver_allow', null, array('class' => 'form-control','id' =>'driver_allow')) }}
        @if($errors->has('driver_allow'))
            <span class="help-block"><strong>{{$errors->first('driver_allow')}}</strong></span>
        @endif
    </div>
</div>
<!-- Helper Salary ends-->

<!-- Helper Allowance  Starts-->
<div class="form-group {{$errors->has('helper_allow')?'has-error':''}}">
    {{ Form::label('helper_allow', 'Helper Allowance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('helper_allow', null, array('class' => 'form-control','id' =>'helper_allow')) }}
        @if($errors->has('helper_allow'))
            <span class="help-block"><strong>{{$errors->first('helper_allow')}}</strong></span>
        @endif
    </div>
</div>
<!-- Helper Allowance ends-->

<!-- Labour load unload  Starts-->
<div class="form-group {{$errors->has('labour')?'has-error':''}}">
    {{ Form::label('labour', 'Labour Load Unload', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('labour', null, array('class' => 'form-control','id' =>'labour')) }}
        @if($errors->has('labour'))
            <span class="help-block"><strong>{{$errors->first('labour')}}</strong></span>
        @endif
    </div>
</div>
<!-- Labour load unload ends-->

<!-- Toll  Starts-->
<div class="form-group {{$errors->has('toll')?'has-error':''}}">
    {{ Form::label('toll', 'Toll', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('toll', null, array('class' => 'form-control','id' =>'toll')) }}
        @if($errors->has('toll'))
            <span class="help-block"><strong>{{$errors->first('toll')}}</strong></span>
        @endif
    </div>
</div>
<!-- Toll ends-->

<!-- Bridge  Starts-->
<div class="form-group {{$errors->has('bridge')?'has-error':''}}">
    {{ Form::label('bridge', 'Bridge', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('bridge', null, array('class' => 'form-control','id' =>'bridge')) }}
        @if($errors->has('bridge'))
            <span class="help-block"><strong>{{$errors->first('bridge')}}</strong></span>
        @endif
    </div>
</div>
<!-- Bridge ends-->

<!-- Scale  Starts-->
<div class="form-group {{$errors->has('scale')?'has-error':''}}">
    {{ Form::label('scale', 'Scale', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('scale', null, array('class' => 'form-control','id' =>'scale')) }}
        @if($errors->has('scale'))
            <span class="help-block"><strong>{{$errors->first('scale')}}</strong></span>
        @endif
    </div>
</div>
<!-- Scale ends-->

<!-- Wheel maintenance  Starts-->
<div class="form-group {{$errors->has('wheel')?'has-error':''}}">
    {{ Form::label('wheel', 'Wheel Maintenance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('wheel', null, array('class' => 'form-control','id' =>'wheel')) }}
        @if($errors->has('wheel'))
            <span class="help-block"><strong>{{$errors->first('wheel')}}</strong></span>
        @endif
    </div>
</div>
<!-- Wheel maintenance ends-->

<!-- Guard/bazar chada Starts-->
<div class="form-group {{$errors->has('donation')?'has-error':''}}">
    {{ Form::label('donation', 'Guard/Bazar Donation', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('donation', null, array('class' => 'form-control','id' =>'donation')) }}
        @if($errors->has('donation'))
            <span class="help-block"><strong>{{$errors->first('donation')}}</strong></span>
        @endif
    </div>
</div>
<!-- Guard/bazar chada ends-->

<!-- Container Charge  Starts-->
<div class="form-group {{$errors->has('container')?'has-error':''}}">
    {{ Form::label('container', 'Container Charge', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('container', null, array('class' => 'form-control','id' =>'container')) }}
        @if($errors->has('container'))
            <span class="help-block"><strong>{{$errors->first('container')}}</strong></span>
        @endif
    </div>
</div>
<!-- Container Charge ends-->

<!-- Port gate  Starts-->
<div class="form-group {{$errors->has('port_gate')?'has-error':''}}">
    {{ Form::label('port_gate', 'Post Gate Charge', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('port_gate', null, array('class' => 'form-control','id' =>'port_gate')) }}
        @if($errors->has('port_gate'))
            <span class="help-block"><strong>{{$errors->first('port_gate')}}</strong></span>
        @endif
    </div>
</div>
<!-- Port gate Charge ends-->

<!-- Other Expenses  Starts-->
<div class="form-group {{$errors->has('other')?'has-error':''}}">
    {{ Form::label('other', 'Other Expenses', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('other', null, array('class' => 'form-control','id' =>'other')) }}
        @if($errors->has('other'))
            <span class="help-block"><strong>{{$errors->first('other')}}</strong></span>
        @endif
    </div>
</div>
<!-- Other Expenses ends-->

<!-- Total Expense  Starts-->
<div class="form-group {{$errors->has('total')?'has-error':''}}">
    {{ Form::label('total', 'Total Expense', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('total', null, array('class' => 'form-control','id' =>'total','readonly')) }}
        @if($errors->has('total'))
            <span class="help-block"><strong>{{$errors->first('other')}}</strong></span>
        @endif
    </div>
</div>
<!-- Total Expense
ends-->

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


@section('script')
    <script>
        $(document).keyup(function () {
            var fuel = $('#fuel_cost').val();
            var driver_allow = $('#driver_allow').val();
            var helper_allow = $('#helper_allow').val();
            var labour = $('#labour').val();
            var toll = $('#toll').val();
            var bridge = $('#bridge').val();
            var scale = $('#scale').val();
            var wheel = $('#wheel').val();
            var donation = $('#donation').val();
            var container = $('#container').val();
            var other = $('#other').val();
            var port_gate = $('#port_gate').val();
            $('#total').val(parseInt(fuel)+
                            parseInt(driver_allow)+
                            parseInt(helper_allow)+
                            parseInt(labour)+
                            parseInt(toll)+
                            parseInt(bridge)+
                            parseInt(scale)+
                            parseInt(wheel)+
                            parseInt(donation)+
                            parseInt(container)+
                            parseInt(other)+
                            parseInt(port_gate));
        })
    </script>
@stop