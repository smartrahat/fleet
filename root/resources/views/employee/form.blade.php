<!-- Driver Name Starts-->
<div class="form-group">
    {{ Form::label('name', 'Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Driver name ends-->

<!-- Driver Father's Name Starts-->
<div class="form-group">
    {{ Form::label('f_name', 'Father\'s Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('f_name',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Driver Father's name ends-->

<!-- Driver Mother's Name Starts-->
<div class="form-group">
    {{ Form::label('m_name', 'Mother\'s Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('m_name',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Driver Father's name ends-->

<!--Present Address Starts-->
<div class="form-group">
    {{ Form::label('pre_address', 'Present Address', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('pre_address',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Present Address ends-->

<!--Permanent Address Starts-->
<div class="form-group">
    {{ Form::label('perm_address', 'Permanent Address', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('perm_address',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Permanent Address ends-->

<!-- NID Number Starts-->
<div class="form-group">
    {{ Form::label('nid', 'National ID No', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('nid',null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- NID Number ends-->

<!-- Designation  Starts-->
<div class="form-group">
    {{ Form::label('designation_id', 'Designation', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('designation_id',$repository->designations(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Designation']) }}
    </div>
</div>
<!--  Designation ends-->

<!-- Designation  Starts-->
<div class="form-group">
    {{ Form::label('education', 'Educational Qualification', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('education',$repository->educations(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Educational Qualification']) }}
    </div>
</div>
<!--  Designation ends-->

<!-- Picture Starts-->
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
<!--  Picture ends-->

<!-- Mobile Number Starts-->
<div class="form-group">
    {{ Form::label('name', 'Mobile Number', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('mobile', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Mobile Number ends-->

<!-- Email Number Starts-->
<div class="form-group">
    {{ Form::label('name', 'Email', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('email', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Email Number ends-->


<!-- Date of joining Starts-->
<div class="form-group">
    <label class="col-md-3 control-label">Joining Date</label>
    <div class="col-md-6">
        <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
            {{ Form::text('join_date', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"' )) }}
        </div>
    </div>
</div>
<!-- Date of joining ends-->

<!-- Appointment Person Name Starts-->
<div class="form-group">
    {{ Form::label('app_person', 'Appointment Person Name', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::text('app_person', null, array('class' => 'form-control')) }}
    </div>
</div>
<!-- Driver name ends-->


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