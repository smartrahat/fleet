<!-- Program ID Starts-->
<div class="form-group {{$errors->has('program_id')?'has-error':''}}">
    {{ Form::label('program_id', 'Program ID', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('program_id',$repository->programs(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Program']) }}
        @if($errors->has('program_id'))
            <span class="help-block"><strong>{{$errors->first('program_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Program ID ends-->

<!-- Loading Starts-->
<div class="form-group {{$errors->has('loading')?'has-error':''}}">
    {{ Form::label('loading', 'Loading Point', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('loading', null, array('class' => 'form-control')) }}
        @if($errors->has('loading'))
            <span class="help-block"><strong>{{$errors->first('loading')}}</strong></span>
        @endif
    </div>
</div>
<!-- Loading ends-->

<!-- Unloading Starts-->
<div class="form-group {{$errors->has('unloading')?'has-error':''}}">
    {{ Form::label('unloading', 'Unloading Point', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('unloading', null, array('class' => 'form-control')) }}
        @if($errors->has('unloading'))
            <span class="help-block"><strong>{{$errors->first('unloading')}}</strong></span>
        @endif
    </div>
</div>
<!-- Unloading ends-->

<!-- Product Details Starts-->
<div class="form-group {{$errors->has('product')?'has-error':''}}">
    {{ Form::label('product', 'Product Details', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('product', null, array('class' => 'form-control')) }}
        @if($errors->has('product'))
            <span class="help-block"><strong>{{$errors->first('product')}}</strong></span>
        @endif
    </div>
</div>
<!-- Product Details ends-->

<!-- Empty Container Starts-->
<div class="form-group {{$errors->has('emp_container')?'has-error':''}}">
    {{ Form::label('emp_container', 'Empty Container', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('emp_container', null, array('class' => 'form-control')) }}
        @if($errors->has('emp_container'))
            <span class="help-block"><strong>{{$errors->first('emp_container')}}</strong></span>
        @endif
    </div>
</div>
<!-- Empty Container ends-->

<!-- Weight Starts-->
<div class="form-group {{$errors->has('weight')?'has-error':''}}">
    {{ Form::label('weight', 'Product Weight', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('weight', null, array('class' => 'form-control')) }}
        @if($errors->has('weight'))
            <span class="help-block"><strong>{{$errors->first('weight')}}</strong></span>
        @endif
    </div>
</div>
<!-- Weight ends-->

<!-- Fuel Starts-->
<div class="form-group {{$errors->has('fuel')?'has-error':''}}">
    {{ Form::label('fuel', 'Fuel Quantity (Ltr)', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('fuel', null, array('class' => 'form-control')) }}
        @if($errors->has('fuel'))
            <span class="help-block"><strong>{{$errors->first('fuel')}}</strong></span>
        @endif
    </div>
</div>
<!-- Fuel ends-->

<!-- Rent Starts-->
{{--<div class="form-group {{$errors->has('rent')?'has-error':''}}">--}}
    {{--{{ Form::label('rent', 'Rent', array('class'=>'col-md-3 control-label')) }}--}}
    {{--<div class="col-md-6">--}}
        {{--{{ Form::text('rent', null, array('class' => 'form-control')) }}--}}
        {{--@if($errors->has('rent'))--}}
            {{--<span class="help-block"><strong>{{$errors->first('rent')}}</strong></span>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Rent ends-->



<!-- Driver Advance Starts-->
<div class="form-group {{$errors->has('driver_adv')?'has-error':''}}">
    {{ Form::label('driver_adv', 'Driver Advance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('driver_adv', null, array('class' => 'form-control','id'=>'driver_adv')) }}
        @if($errors->has('driver_adv'))
            <span class="help-block"><strong>{{$errors->first('driver_adv')}}</strong></span>
        @endif
    </div>
</div>
<!-- Driver Advance ends-->


<!-- Driver Advance Fixed Starts-->
<div class="form-group {{$errors->has('driver_adv_fix')?'has-error':''}}">
    {{ Form::label('driver_adv_fix', 'Driver Advance (Fixed)', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('driver_adv_fix', null, array('class' => 'form-control','id'=>'driver_adv_fix')) }}
        @if($errors->has('driver_adv_fix'))
            <span class="help-block"><strong>{{$errors->first('driver_adv_fix')}}</strong></span>
        @endif
    </div>
</div>
<!-- Driver Advance Fixed ends-->

<!-- Driver Extra Given Starts-->
<div class="form-group {{$errors->has('extra_adv')?'has-error':''}}">
    {{ Form::label('extra_adv', 'Extra Advance', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('extra_adv', null, array('class' => 'form-control','id'=>'extra_adv','readonly')) }}
        @if($errors->has('extra_adv'))
            <span class="help-block"><strong>{{$errors->first('extra_adv')}}</strong></span>
        @endif
    </div>
</div>
<!-- Driver Extra Given ends-->

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
            var driver_adv = $('#driver_adv').val();
            var driver_adv_fix = $('#driver_adv_fix').val();
            $('#extra_adv').val(parseInt(driver_adv) - parseInt(driver_adv_fix));
        })
    </script>
@stop