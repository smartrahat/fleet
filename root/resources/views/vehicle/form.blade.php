<!-- Vehicle Name Starts-->
<div class="form-group {{$errors->has('name')? 'has-error':''}}">
    {{ Form::label('name', 'Name:', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        @if($errors->has('name'))
            <span class="help-block"><strong>{{$errors->first('name')}}</strong></span>
        @endif
    </div>
</div>
<!-- Vehicle name ends-->
<!-- brand Starts-->
<div class="form-group {{$errors->has('brand_id')? 'has-error':''}}">
    {{ Form::label('brand_id', 'Brand Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('brand_id',$repository->brands(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Brand']) }}
        @if($errors->has('brand_id'))
            <span class="help-block"><strong>{{$errors->first('brand_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- brand ends-->
<!-- Type start-->
<div class="form-group {{$errors->has('type_id')? 'has-error':''}}">
    {{ Form::label('type_id', 'Types', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('type_id',$repository->types(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle Type']) }}
        @if($errors->has('type_id'))
            <span class="help-block"><strong>{{$errors->first('type_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Types ends-->
<!-- Owner start-->
<div class="form-group {{$errors->has('owner_id')? 'has-error':''}}">
    {{ Form::label('owner_id', 'Owner', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('owner_id',$repository->owners(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle Owner']) }}
        @if($errors->has('owner_id'))
            <span class="help-block"><strong>{{$errors->first('owner_id')}}</strong></span>
        @endif
    </div>
</div>

<!-- Owner -->
<!--Road permit starts-->
<div class="form-group {{$errors->has('roadPermitStart','roadPermitEnd')? 'has-error':''}}">
    <label class="col-md-3 control-label">Road Permit</label>
    <div class="col-md-6">
        <div class="input-daterange input-group" data-plugin-datepicker data-date-format='yyyy-mm-dd' data-date-format='yyyy-mm-dd'>
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            {{ Form::text('roadPermitStart', null, array('class' => 'form-control')) }}
            <span class="input-group-addon">to</span>
            {{ Form::text('roadPermitEnd', null, array('class' => 'form-control')) }}
        </div>
        @if($errors->has('roadPermitStart'))
            <span class="help-block"><strong>{{$errors->first('roadPermitStart')}}</strong></span><br>
        @endif
        @if($errors->has('roadPermitEnd'))
            <span class="help-block"><strong>{{$errors->first('roadPermitEnd')}}</strong></span>
        @endif

    </div>
</div>
<!--Road permit ends-->

<!--Tax Token starts-->
<div class="form-group {{$errors->has('taxTokenStart','taxTokenEnd')? 'has-error':''}}">
    <label class="col-md-3 control-label">Tax Token</label>
    <div class="col-md-6">
        <div class="input-daterange input-group" data-plugin-datepicker data-date-format='yyyy-mm-dd'>
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            {{ Form::text('taxTokenStart', null, array('class' => 'form-control')) }}
            <span class="input-group-addon">to</span>
            {{ Form::text('taxTokenEnd', null, array('class' => 'form-control')) }}
        </div>
        @if($errors->has('taxTokenStart'))
            <span class="help-block"><strong>{{$errors->first('taxTokenStart')}}</strong></span><br>
        @endif
        @if($errors->has('taxTokenEnd'))
            <span class="help-block"><strong>{{$errors->first('taxTokenEnd')}}</strong></span>
        @endif
    </div>
</div>
<!--Road permit ends-->
<!--Road permit starts-->
<div class="form-group {{$errors->has('insuranceStart','insuranceEnd')? 'has-error':''}}">
    <label class="col-md-3 control-label">Insurance</label>
    <div class="col-md-6">
        <div class="input-daterange input-group" data-plugin-datepicker data-date-format='yyyy-mm-dd'>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
            {{ Form::text('insuranceStart', null, array('class' => 'form-control')) }}
            <span class="input-group-addon">to</span>
            {{ Form::text('insuranceEnd', null, array('class' => 'form-control')) }}
        </div>
        @if($errors->has('insuranceStart'))
            <span class="help-block"><strong>{{$errors->first('insuranceStart')}}</strong></span><br>
        @endif
        @if($errors->has('insuranceEnd'))
            <span class="help-block"><strong>{{$errors->first('insuranceEnd')}}</strong></span>
        @endif
    </div>
</div>
<!--Road permit ends-->

<!--Fitness starts-->
<div class="form-group {{$errors->has('fitnessStart','fitnessEnd')? 'has-error':''}}">
    <label class="col-md-3 control-label">Fitness</label>
    <div class="col-md-6">
        <div class="input-daterange input-group" data-plugin-datepicker data-date-format='yyyy-mm-dd'>
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            {{ Form::text('fitnessStart', null, array('class' => 'form-control')) }}
            <span class="input-group-addon">to</span>
            {{ Form::text('fitnessEnd', null, array('class' => 'form-control')) }}
        </div>
        @if($errors->has('fitnessStart'))
            <span class="help-block"><strong>{{$errors->first('fitnessStart')}}</strong></span><br>
        @endif
        @if($errors->has('fitnessEnd'))
            <span class="help-block"><strong>{{$errors->first('fitnessEnd')}}</strong></span>
        @endif
    </div>
</div>
<!--Fitness ends-->

<!--Registration Certificate starts-->
<div class="form-group {{$errors->has('regCertStart','regCertEnd')? 'has-error':''}}">
    <label class="col-md-3 control-label">Registration Certification</label>
    <div class="col-md-6">
        <div class="input-daterange input-group" data-plugin-datepicker data-date-format='yyyy-mm-dd'>
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
            {{ Form::text('regCertStart', null, array('class' => 'form-control')) }}
            <span class="input-group-addon">to</span>
            {{ Form::text('regCertEnd', null, array('class' => 'form-control')) }}
        </div>
        @if($errors->has('regCertStart'))
            <span class="help-block"><strong>{{$errors->first('regCertStart')}}</strong></span><br>
        @endif
        @if($errors->has('regCertEnd'))
            <span class="help-block"><strong>{{$errors->first('regCertEnd')}}</strong></span>
        @endif
    </div>
</div>
<!--Registration Certificate ends-->

<!-- Vehicle Number Starts-->
<div class="form-group {{$errors->has('vehicleNo')? 'has-error':''}}">

    <label class="col-md-3 control-label">Vehicle Number</label>
    <div class="col-md-6">
        {{ Form::text('vehicleNo',null, array('class' => 'form-control')) }}
        @if($errors->has('vehicleNo'))
            <span class="help-block"><strong>{{$errors->first('vehicleNo')}}</strong></span><br>
        @endif
    </div>
</div>
<!-- Vehicle number ends-->

<!-- Engine Number Starts-->
<div class="form-group {{$errors->has('engineNo')? 'has-error':''}}">
    <label class="col-md-3 control-label">Engine Number</label>
    <div class="col-md-6">
        {{ Form::text('engineNo',null, array('class' => 'form-control')) }}
        @if($errors->has('engineNo'))
            <span class="help-block"><strong>{{$errors->first('engineNo')}}</strong></span><br>
        @endif
    </div>
</div>
<!-- Engine Number ends-->

<!-- Chesis Number Starts-->
<div class="form-group {{$errors->has('chasesNo')? 'has-error':''}}">
    <label class="col-md-3 control-label">Chases Number</label>
    <div class="col-md-6">
        {{ Form::text('chasesNo',null, array('class' => 'form-control')) }}
        @if($errors->has('chasesNo'))
            <span class="help-block"><strong>{{$errors->first('chasesNo')}}</strong></span><br>
        @endif
    </div>
</div>
<!-- Chesis Number ends-->

<!-- Status Starts-->
<div class="form-group {{$errors->has('status_id')? 'has-error':''}}">
    <label class="col-md-3 control-label">Status</label>
    <div class="col-md-6">
        {{ Form::select('status_id',$repository->status(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select a status']) }}
        @if($errors->has('status_id'))
            <span class="help-block"><strong>{{$errors->first('status_id')}}</strong></span><br>
        @endif
    </div>
</div>
<!-- Status ends-->
<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    <label class="col-md-3 control-label" for="image">Image<span class="required">*</span>:</label>
    <div class="col-md-9">
        {!! Form::file('image',['onchange'=>'readURL(this)']) !!}
        @if ($errors->has('image'))
            <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
        @endif
        <img src="{{ asset('/images/vehicles/'.$vehicle->image) }}" id="image" class="img-thumbnail" width="265" alt=""/>
    </div>
</div>
<!--Submit button -->
<div class="form-group">
    <div class="col-md-2 col-md-offset-3">
        {{ Form::submit($submitButtonText,['class'=>'form-control btn btn-success']) }}
    </div>
    <div class="col-md-2">
        {{ Form::reset('Reset',['class'=>'form-control btn btn-warning']) }}
    </div>
    <div class="col-md-2">
        <a href="{{ URL::previous() }}" role="button" class="form-control btn btn-danger">Cancel</a>
    </div>
</div>
<!-- ends-->

@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result).width(150).height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop