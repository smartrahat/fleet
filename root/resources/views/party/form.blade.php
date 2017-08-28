<!-- Owner Name Starts-->
<div class="form-group">
    {{ Form::label('name', 'Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('name',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Owner name ends-->

<!-- Owner Father's Name Starts-->
<div class="form-group">
    {{ Form::label('contact_person', 'Contact Person:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('contact_person',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Owner Father's name ends-->

<!-- Address Starts-->
<div class="form-group">
    {{ Form::label('address', 'Address:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('address',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Address ends-->

<!-- NID Number Starts-->
<div class="form-group">
    {{ Form::label('nid', 'National ID No:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('nid',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- NID Number ends-->

<!-- Email Starts-->
<div class="form-group">
    {{ Form::label('name', 'E-mail:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('email',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Email ends-->

<!-- Owner Name Starts-->
<div class="form-group">
    {{ Form::label('mobil', 'Contact Number:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('mobile',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Owner name ends-->

<div class="form-group">
    <div class="col-md-2 col-md-offset-3">
        {{--<input type="submit" value="Update"  class="form-control btn btn-success">--}}
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