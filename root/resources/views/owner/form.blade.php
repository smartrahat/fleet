<!-- Owner Name Starts-->
<div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
    {{ Form::label('name', 'Name', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('name', null, array('class' => 'form-control')) }}
        @if ($errors->has('name'))
            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
        @endif
    </div>
</div>
<!-- Owner name ends-->

<!-- Owner Father's Name Starts-->
<div class="form-group  {{ $errors->has('f_name') ? ' has-error' : '' }}">
    {{ Form::label('name', 'Father\'s Name', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('f_name', null, array('class' => 'form-control')) }}
        @if ($errors->has('f_name'))
            <span class="help-block"><strong>{{ $errors->first('f_name') }}</strong></span>
        @endif
    </div>
</div>
<!-- Owner Father's name ends-->

<!-- Address Starts-->
<div class="form-group  {{ $errors->has('address') ? ' has-error' : '' }}">
    {{ Form::label('address', 'Address', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('address', null, array('class' => 'form-control')) }}
        @if ($errors->has('address'))
            <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
        @endif
    </div>
</div>
<!-- Address ends-->

<!-- NID Number Starts-->
<div class="form-group  {{ $errors->has('nid_no') ? ' has-error' : '' }}">
    {{ Form::label('nid_no', 'National ID No', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('nid_no',null, array('class' => 'form-control')) }}
        @if ($errors->has('nid_no'))
            <span class="help-block"><strong>{{ $errors->first('nid_no') }}</strong></span>
        @endif
    </div>
</div>
<!-- NID Number ends-->

<!-- Email Starts-->
<div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
    {{ Form::label('email', 'E-mail', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('email',null, array('class' => 'form-control')) }}
        @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>
</div>
<!-- Email ends-->

<!-- Owner Name Starts-->
<div class="form-group  {{ $errors->has('mobile_no') ? ' has-error' : '' }}">
    {{ Form::label('mobile_no', 'Contact Number', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('mobile_no',null, array('class' => 'form-control')) }}
        @if ($errors->has('mobile_no'))
            <span class="help-block"><strong>{{ $errors->first('mobile_no') }}</strong></span>
        @endif
    </div>
</div>
<!-- Owner name ends-->


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
<!-- ends -->