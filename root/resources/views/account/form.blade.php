<!-- Employee Rank Starts -->
<div class="form-group {{ $errors->has('rank') ? ' has-error' : '' }}" >
    {{ Form::label('rank', 'Position', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('rank', null, array('class' => 'form-control')) }}
        @if ($errors->has('rank'))
            <span class="help-block"><strong>{{ $errors->first('rank') }}</strong></span>
        @endif
    </div>
</div>
<!-- Employee name ends -->

<!-- Employee Name Starts -->
<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}" >
    {{ Form::label('name', 'Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('name', null, array('class' => 'form-control')) }}
        @if ($errors->has('name'))
            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
        @endif
    </div>
</div>
<!-- Employee name ends -->

<!-- Employee Father's Name Starts -->
<div class="form-group">
    {{ Form::label('f_name', 'Father\'s Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('f_name',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Employee Father's name ends -->

<!-- Employee Mother's Name Starts -->
<div class="form-group {{ $errors->has('m_name') ? ' has-error' : '' }}">
    {{ Form::label('m_name', 'Mother\'s Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('m_name',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Employee Father's name ends -->

<!--Present Address Starts -->
<div class="form-group {{ $errors->has('pre_address') ? ' has-error' : '' }}">
    {{ Form::label('pre_address', 'Present Address', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('pre_address',null, array('class' => 'form-control')) }}
        @if ($errors->has('pre_address'))
            <span class="help-block"><strong>{{ $errors->first('pre_address') }}</strong></span>
        @endif
    </div>
</div>
<!-- Present Address ends -->

<!--Permanent Address Starts -->
<div class="form-group {{ $errors->has('perm_address') ? ' has-error' : '' }}">
    {{ Form::label('perm_address', 'Permanent Address', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('perm_address',null, array('class' => 'form-control')) }}
        @if ($errors->has('perm_address'))
            <span class="help-block"><strong>{{ $errors->first('perm_address') }}</strong></span>
        @endif
    </div>
</div>
<!-- Permanent Address ends -->

<!-- NID Number Starts -->
<div class="form-group {{ $errors->has('nid') ? ' has-error' : '' }}">
    {{ Form::label('nid', 'National ID No', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('nid',null, array('class' => 'form-control')) }}
        @if ($errors->has('nid'))
            <span class="help-block"><strong>{{ $errors->first('nid') }}</strong></span>
        @endif
    </div>
</div>
<!-- NID Number ends-->

<!-- Date of Birth Starts -->
<div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
    <label class="col-md-3 control-label">Date of Birth</label>
    <div class="col-md-6">
        <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
            {{ Form::text('dob', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"' )) }}
        </div>
        @if ($errors->has('dob'))
            <span class="help-block"><strong>{{ $errors->first('dob') }}</strong></span>
        @endif
    </div>
</div>
<!-- Date of Birth ends -->

<!-- education  Starts -->
<div class="form-group {{ $errors->has('education') ? ' has-error' : '' }}">
    {{ Form::label('education', 'Highest Educational Qualification', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('education',$repository->educations(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Highest Educational Qualification']) }}
        @if ($errors->has('education'))
            <span class="help-block"><strong>{{ $errors->first('education') }}</strong></span>
        @endif
    </div>
</div>
<!--  Education ends -->

<!-- Designation  Starts -->
<div class="form-group {{ $errors->has('designation_id') ? ' has-error' : '' }}">
    {{ Form::label('designation_id', 'Designation', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('designation_id',$repository->designations(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Designation']) }}
        @if ($errors->has('designation_id'))
            <span class="help-block"><strong>{{ $errors->first('designation_id') }}</strong></span>
        @endif
    </div>
</div>
<!--  Designation ends -->

<!-- Picture Starts -->
<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
    <label class="col-md-3 control-label" for="image">Image<span class="required">*</span>:</label>
    <div class="col-md-9">
        {!! Form::file('image',['onchange'=>'readURL(this)']) !!}
        @if ($errors->has('image'))
            <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
        @endif
        <img src="{{ asset('/images/employees/'.$employee->image) }}" id="image" class="img-thumbnail" width="265" alt=""/>
    </div>
</div>
<!--  Picture ends -->

<!-- Mobile Number Starts -->
<div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
    {{ Form::label('mobile', 'Mobile Number', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('mobile', null, array('class' => 'form-control')) }}
        @if ($errors->has('mobile'))
            <span class="help-block"><strong>{{ $errors->first('mobile') }}</strong></span>
        @endif
    </div>
</div>
<!-- Mobile Number ends -->

<!-- Email Starts -->
<div class="form-group ">
    {{ Form::label('email', 'Email', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('email', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Email ends -->

<!-- Date of joining Starts -->
<div class="form-group {{ $errors->has('join_date') ? ' has-error' : '' }}">
    <label class="col-md-3 control-label">Joining Date</label>
    <div class="col-md-6">
        <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
            {{ Form::text('join_date', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"' )) }}
        </div>
        @if ($errors->has('join_date'))
            <span class="help-block"><strong>{{ $errors->first('join_date') }}</strong></span>
        @endif
    </div>
</div>
<!-- Date of joining ends -->

<!-- Appointment Person Name Starts -->
<div class="form-group {{ $errors->has('app_person') ? ' has-error' : '' }}">
    {{ Form::label('app_person', 'Appointment Person Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('app_person', null, array('class' => 'form-control')) }}
        @if ($errors->has('app_person'))
            <span class="help-block"><strong>{{ $errors->first('app_person') }}</strong></span>
        @endif
    </div>
</div>
<!-- Employee name ends -->


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