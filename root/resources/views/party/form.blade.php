<!-- Owner Name Starts-->
<div class="form-group {{ $errors->has('name')?'has-error':'' }}">
    {{ Form::label('name', 'Party Name:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('name',null, array('class' => 'form-control')) }}
        @if($errors->has('name'))
            <span class="help-block"><strong>{{$errors->first('name')}}</strong></span>
        @endif
    </div>
</div>
<!-- Owner name ends-->

<!-- Owner Father's Name Starts-->
<div class="form-group {{$errors->has('contact_person')?'has-error':''}}">
    {{ Form::label('contact_person', 'Contact Person:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('contact_person',null, array('class' => 'form-control')) }}
        @if($errors->has('contact_person'))
            <span class="help-block"><strong>{{$errors->first('contact_person')}}</strong></span>
        @endif
    </div>
</div>
<!-- Owner Father's name ends-->

<!-- Address Starts-->
<div class="form-group {{$errors->has('address')?'has-error':''}}">
    {{ Form::label('address', 'Address:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('address',null, array('class' => 'form-control')) }}
        @if($errors->has('address'))
            <span class="help-block"><strong>{{$errors->first('address')}}</strong></span>
        @endif
    </div>
</div>
<!-- Address ends-->

<!-- Email Starts-->
<div class="form-group {{$errors->has('email')?'has-error':''}}p">
    {{ Form::label('name', 'E-mail:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('email',null, array('class' => 'form-control')) }}
        @if($errors->has('email'))
            <span class="help-block"><strong>{{$errors->first('email')}}</strong></span>
        @endif
    </div>
</div>
<!-- Email ends-->

<!-- Mobile Starts-->
<div class="form-group {{$errors->has('mobile')?'has-error':''}}">
    {{ Form::label('mobile', 'Contact Number:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('mobile',null, array('class' => 'form-control')) }}
        @if($errors->has('mobile'))
            <span class="help-block"><strong>{{$errors->first('mobile')}}</strong></span>
        @endif
    </div>
</div>
<!-- Mobile ends-->

<div class="form-group">
    <div class="col-md-2 col-md-offset-3">
        {{ Form::submit($submitButtonText,['class'=>'form-control btn btn-success']) }}
    </div>
    <div class="col-md-2">
        {{--<input type="reset" value="Reset"  class="form-control btn btn-warning">--}}
        {{ Form::reset('RESET',['class'=>'form-control btn btn-warning']) }}
    </div>
    <div class="col-md-2">
        <a href="{{ URL::previous() }}" role="button" class="form-control btn btn-danger">Back</a>
    </div>
</div>
<!-- ends-->