<!-- Supplier Name Starts-->
<div class="form-group {{ $errors->has('supplier_name')? 'has-error':'' }}">
    {{ Form::label('supplier_name', 'Supplier Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('supplier_name', null, array('class' => 'form-control')) }}
        @if ($errors->has('supplier_name'))
            <span class="help-block"><strong>{{ $errors->first('supplier_name') }}</strong></span>
        @endif
    </div>
</div>
<!-- Supplier name ends-->

<!-- Supplier Contact person Name Starts-->
<div class="form-group  {{ $errors->has('name') ? ' has-error' : '' }}">
    {{ Form::label('name', 'Contact Person:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('name', null, array('class' => 'form-control')) }}
        @if ($errors->has('name'))
            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
        @endif
    </div>
</div>
<!-- Supplier Contact person Name ends-->

<!-- Address Starts-->
<div class="form-group  {{ $errors->has('address') ? ' has-error' : '' }}">
    {{ Form::label('address', 'Address:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('address', null, array('class' => 'form-control')) }}
        @if ($errors->has('address'))
            <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
        @endif
    </div>
</div>
<!-- Address ends-->

<!-- mobile Number Starts-->
<div class="form-group  {{ $errors->has('mobile') ? ' has-error' : '' }}">
    {{ Form::label('mobile', 'Mobile No.:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('mobile',null, array('class' => 'form-control')) }}
        @if ($errors->has('mobile'))
            <span class="help-block"><strong>{{ $errors->first('mobile') }}</strong></span>
        @endif
    </div>
</div>
<!-- mobile Number ends-->

<!-- Email Starts-->
<div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
    {{ Form::label('email', 'E-mail:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('email',null, array('class' => 'form-control')) }}
        @if ($errors->has('email'))
            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
        @endif
    </div>
</div>
<!-- Email ends-->

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