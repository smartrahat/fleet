
<!--Date starts-->
<div class="form-group {{$errors->has('date')?'has-error':''}}">
    <label class="col-md-3 control-label">Program Date:</label>
    <div class="col-md-6">
        <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
            {{ Form::text('date', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"' )) }}
        </div>
        @if($errors->has('date'))
            <span class="help-block"><strong>{{$errors->first('date')}}</strong></span>
        @endif
    </div>
</div>

<!--Date ends-->

<!-- Serial Starts-->
<div class="form-group {{$errors->has('serial')?'has-error':''}}">
    <label class="col-md-3 control-label">Serial Number:</label>
    <div class="col-md-6">
        {{ Form::text('serial',null, array('class' => 'form-control')) }}
        @if($errors->has('serial'))
            <span class="help-block"><strong>{{$errors->first('serial')}}</strong></span>
        @endif
    </div>
</div>
<!-- Serial ends-->

<!-- party start-->
<div class="form-group {{$errors->has('party_id')?'has-error':''}}">
    {{ Form::label('party_id', 'Party Name:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('party_id',$repository->parties(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Party']) }}
        @if($errors->has('party_id'))
            <span class="help-block"><strong>{{$errors->first('party_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- party ends-->


<!-- Employee start-->
<div class="form-group {{$errors->has('employee_id')?'has-error':''}}">
    {{ Form::label('employee_id', 'SR Name:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('employee_id',$repository->employees(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select SR']) }}
        @if($errors->has('employee_id'))
            <span class="help-block"><strong>{{$errors->first('employee_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Employee ends-->

<!-- Driver Starts-->
<div class="form-group {{$errors->has('driver_id')?'has-error':''}}">
    {{ Form::label('driver_id', 'Driver:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('driver_id',$repository->drivers(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Driver']) }}
        @if($errors->has('driver_id'))
            <span class="help-block"><strong>{{$errors->first('driver_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- driver ends-->

<!-- Vehicle Number Starts-->
<div class="form-group {{$errors->has('vehicle_id')?'has-error':''}}">
    {{ Form::label('vehicle_id', 'Vehicle Number:', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('vehicle_id',$repository->vehicles(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle']) }}
        @if($errors->has('vehicle_id'))
            <span class="help-block"><strong>{{$errors->first('vehicle_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Vehicle name ends-->

<!-- Option Starts-->
<div class="form-group">
    {{ Form::label('option', 'Rent Option:', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('option',['Fixed','On Product Weight'],null,['class'=>'form-control populate','id'=>'option','data-plugin-selectTwo','placeholder'=>'Select Rent Option']) }}
    </div>
</div>
<!-- Option ends-->

<!-- Weight Starts-->
<div class="form-group" id='weight_div' hidden="hidden">
    <label class="col-md-3 control-label">Weight (kg):</label>
    <div class="col-md-6">
        {{ Form::text('weight',null, array('class' => 'form-control','id'=>'weight')) }}
    </div>
</div>
<!-- Weight ends-->

<!-- Rate Starts-->
<div class="form-group" id='rate_div' hidden="hidden">
    <label class="col-md-3 control-label">Rate (tk):</label>
    <div class="col-md-6">
        {{ Form::text('rate',null, array('class' => 'form-control','id'=>'rate')) }}
    </div>
</div>
<!-- Rate ends-->

<!-- Total Rent Starts-->
<div class="form-group {{$errors->has('rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Total Rent:</label>
    <div class="col-md-6">
        {{ Form::text('rent',null, array('class' => 'form-control','id'=>'rent')) }}
        @if($errors->has('rent'))
            <span class="help-block"><strong>{{$errors->first('rent')}}</strong></span>
        @endif
    </div>
</div>
<!-- Total Rent ends-->

<!-- Advance Rent Starts-->
<div class="form-group {{$errors->has('adv_rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Advance Rent:</label>
    <div class="col-md-6">
        {{ Form::text('adv_rent',null, array('class' => 'form-control','id'=>'adv_rent')) }}
        @if($errors->has('adv_rent'))
            <span class="help-block"><strong>{{$errors->first('adv_rent')}}</strong></span>
        @endif
    </div>
</div>
<!-- Advance Rent ends-->


<!-- Due Rent Starts-->
<div class="form-group {{$errors->has('due_rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Due Rent:</label>
    <div class="col-md-6">
        {{ Form::text('due_rent',null, ['class' => 'form-control','id'=>'due_rent','readonly']) }}
        @if($errors->has('due_rent'))
            <span class="help-block"><strong>{{$errors->first('due_rent')}}</strong></span>
        @endif
    </div>
</div>
<!-- Due Rent ends-->

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
        $(document).ready( function() {
            $('#option').bind('change', function (e) {

                if( $('#option').val() == 1) {
                    $('#rate_div').show();
                    $('#weight_div').show();

                    $('#rate').removeAttr('disabled');
                    $('#weight').removeAttr('disabled');
                }else{
                    $('#rate_div').hide();
                    $('#weight_div').hide();
                    $('#weight').val(0);
                    $('#rate').val(0);
                    $('#rate').attr('disabled','disabled');
                    $('#weight').attr('disabled','disabled');
                }
            });
        });
    </script>
    <script>
        $(document).keyup(function () {
            var weight = $('#weight').val();
            var rate = $('#rate').val();
            if(weight>0 && rate>0){
                $('#rent').val(parseFloat(weight)*parseFloat(rate));
            }
        })
    </script>


    <script>
        $(document).keyup(function () {
            var rent = $('#rent').val();
            var advance = $('#adv_rent').val();
            $('#due_rent').val(parseFloat(rent) - parseFloat(advance));
        })
    </script>

@stop