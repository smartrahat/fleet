<div class="col-md-8">
    @if($errors->any)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif


    <div class="form-group">
        <label class="col-md-3 control-label" for="name">Name<span class="required">*</span>:</label>
        <div class="col-md-9">
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Company Name','required']) !!}
            @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="address">Address<span class="required">*</span>:</label>
        <div class="col-md-9">
            {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Company Address','required','required']) !!}
            @if ($errors->has('address'))
                <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
        <label class="col-md-3 control-label" for="country_id">Country<span class="required">*</span>:</label>
        <div class="col-md-9">
            {!! Form::select('country_id',$repository->countries(),null,['class'=>'form-control populate','data-plugin-selectTwo'=>'','id'=>'country','placeholder'=>'Select a Country','required']) !!}
            @if ($errors->has('country_id'))
                <span class="help-block">
                <strong>{{ $errors->first('country_id') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('state_id') ? ' has-error' : '' }}">
        <label class="col-md-3 control-label" for="state_id">State<span class="required">*</span>:</label>
        <div class="col-md-9">
            {!! Form::select('state_id',$repository->states(),null,['class'=>'form-control populate','data-plugin-selectTwo'=>'','id'=>'state','placeholder'=>'Select a State','required']) !!}
            @if ($errors->has('state_id'))
                <span class="help-block">
                <strong>{{ $errors->first('state_id') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
        <label class="col-md-3 control-label" for="city_id">City<span class="required">*</span>:</label>
        <div class="col-md-9">
            {!! Form::select('city_id',$repository->cities(),null,['class'=>'form-control populate','data-plugin-selectTwo'=>'','id'=>'city','placeholder'=>'Select a City','required']) !!}
            @if ($errors->has('city_id'))
                <span class="help-block">
                <strong>{{ $errors->first('city_id') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label class="col-md-3 control-label" for="phone">Phone<span class="required">*</span>:</label>
        <div class="col-md-9">
            {!! Form::text('phone',null,['class'=>'form-control','id'=>'inputDefault','placeholder'=>'Phone Number','required']) !!}
            @if ($errors->has('phone'))
                <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-3 control-label" for="email">Email:</label>
        <div class="col-md-9">
            {!! Form::text('email',null,['class'=>'form-control','id'=>'inputDefault','placeholder'=>'email@example.com as username']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('Logo','',['class'=>'col-md-3 control-label']) !!}
        <br/>
        <div class="col-md-9">
            <img src="{{ asset('admin/images/companies') }}/{{ $company->logo }}" id="blah" class="img-thumbnail" width="265" alt=""/>
            {!! Form::file('image',['onchange'=>'readURL(this)']) !!}
            <p>For better view upload image with resolution 100px*100px</p>
            @if ($errors->has('logo'))
                <span class="help-block">
                <strong>{{ $errors->first('logo') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Favicon','',['class'=>'col-md-3 control-label']) !!}
        <br/>
        <div class="col-md-9">
            <img src="{{ asset('admin/images/companies') }}/{{ $company->favicon }}" id="blah" class="img-thumbnail" width="100" alt=""/>
            {!! Form::file('favicon',['onchange'=>'readURL(this)']) !!}
            <p>For better view upload image with resolution 50px*50px</p>
            @if ($errors->has('favicon'))
                <span class="help-block">
                <strong>{{ $errors->first('favicon') }}</strong>
            </span>
            @endif
        </div>
    </div>

</div>

<div class="col-md-12 text-center">
    <hr/>
    <h3>Login Password for Admin</h3>
    <hr/>
</div>

<!--User Starts-->

<div class="form-group {{$errors->has('password')?'has-error':''}}">
    <label class="col-md-2 control-label">Password:</label>
    <div class="col-md-6">
        {{ Form::password('password',['class' => 'form-control','placeholder'=>'Password','required']) }}
        @if($errors->has('password'))
            <span class="help-block"><strong>{{$errors->first('password')}}</strong></span>
        @endif
    </div>
</div>
<div class="form-group {{$errors->has('password_confirmation')?'has-error':''}}">
    <label class="col-md-2 control-label">Confirm Password:</label>
    <div class="col-md-6">
        {{ Form::password('password_confirmation',['class' => 'form-control','placeholder'=>'Confirm Password','required']) }}
        @if($errors->has('password_confirmation'))
            <span class="help-block"><strong>{{$errors->first('password_confirmation')}}</strong></span>
        @endif
    </div>
</div>


<!--User Ends -->

<div class="form-group text-center row">
    <div class="col-md-12">
        {!! Form::submit($submitButtonText,['class'=>'btn btn-success']) !!}
        {!! Form::reset('Reset',['class'=>'btn btn-warning']) !!}
        <a href="{{ URL::previous() }}" role="button" class="btn btn-danger">Cancel</a>
    </div>
</div>

@section('script')
    {{--<script type="text/javascript" charset="utf-8">--}}
        {{--/**--}}
         {{--* Load states after selecting country--}}
         {{--*/--}}
        {{--$("select#country").change(function(){--}}
            {{--$("#spinner").show();--}}
            {{--var country = $(this).val();--}}
            {{--var csrf = "{{ csrf_token() }}";--}}
            {{--$.ajax({--}}
                {{--url:"country-submit",--}}
                {{--data: {country:country, _token:csrf},--}}
                {{--type:"post"--}}
            {{--}).done(function(e){--}}
{{--//                ThisDiv.show();--}}
                {{--//console.log(e);--}}
                {{--$("select#state").removeAttr('disabled');--}}
                {{--$("select#state").html(e);--}}
                {{--$("#spinner").hide();--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    {{--<script type="text/javascript" charset="utf-8">--}}
        {{--/**--}}
         {{--* Load cities after selecting state--}}
         {{--*/--}}
        {{--$("select#state").change(function(){--}}
            {{--$("#spinner").show();--}}
            {{--var state = $(this).val();--}}
            {{--var csrf = "{{ csrf_token() }}";--}}
            {{--$.ajax({--}}
                {{--url:"state-submit",--}}
                {{--data: {state:state, _token:csrf},--}}
                {{--type:"post"--}}
            {{--}).done(function(e){--}}
{{--//                ThisDiv.show();--}}
                {{--//console.log(e);--}}
                {{--$("select#city").removeAttr('disabled');--}}
                {{--$("select#city").html(e);--}}
                {{--$("#spinner").hide();--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    {{--<script>--}}
        {{--/**--}}
         {{--* Load state and city on edit page--}}
         {{--*/--}}
        {{--$(document).ready(function(){--}}
            {{--var country = $("select#country").val();--}}
            {{--var state = $("select#state");--}}
            {{--var city = $("select#city");--}}
            {{--if(country > 0){--}}
                {{--state.removeAttr('disabled');--}}
            {{--}--}}
            {{--if(state.val() > 0){--}}
                {{--city.removeAttr('disabled');--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}

    {{--<script type="text/javascript" charset="utf-8">--}}
        {{--/**--}}
         {{--* Load state and city on edit page if data exist--}}
         {{--*/--}}
        {{--$(document).ready(function(){--}}
            {{--var country = $("select#country").val();--}}
            {{--if(country > 0) {--}}
                {{--var csrf = "{{ csrf_token() }}";--}}
                {{--$.ajax({--}}
                    {{--url: "country-submit",--}}
                    {{--data: {country: country, _token: csrf},--}}
                    {{--type: "post"--}}
                {{--}).done(function (e) {--}}
                    {{--var state = $("select#state");--}}
                    {{--state.removeAttr('disabled').html(e).val({{ $customer->state }});--}}
                    {{--$.ajax({--}}
                        {{--url: "state-submit",--}}
                        {{--data: {state: state.val(), _token: csrf},--}}
                        {{--type: "post"--}}
                    {{--}).done(function (e) {--}}
                        {{--$("select#city").removeAttr('disabled').html(e).val({{ $customer->city }});--}}
                    {{--});--}}
                {{--});--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}

    {{--<script>--}}
        {{--setInterval(function(){--}}
            {{--/**--}}
             {{--* disable & empty state & city if country is not define--}}
             {{--*/--}}
            {{--if($("#country").val() < 1){--}}
                {{--$("#state").val("").attr('disabled','disabled');--}}
            {{--}--}}
            {{--if($("#state").val() == ""){--}}
                {{--$("#city").val("").attr('disabled','disabled');--}}
            {{--}--}}
        {{--},1000);--}}
    {{--</script>--}}

    <script>
        /**
         * Display selected image on form before store or updating storage
         * Created by: smartrahat on 05.12.2016 02:16PM
         * @param input
         */
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result).width(265).height(260);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@stop