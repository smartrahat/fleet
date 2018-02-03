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

<!-- Program ID Starts-->
<div class="form-group {{$errors->has('program_id')?'has-error':''}}">
    {{ Form::label('program_id', 'Program ID', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        <select  id="program" class="populate form-control" data-plugin-selectTwo>
            <option>Select Program ID</option>
        </select>
        {{--{{ Form::select('program_id',$repository->programs(),null,['class'=>'form-control populate','id' =>'program_id','data-plugin-selectTwo','placeholder'=>'Select Program']) }}--}}
        {{--@if($errors->has('program_id'))--}}
            {{--<span class="help-block"><strong>{{$errors->first('program_id')}}</strong></span>--}}
        {{--@endif--}}
    </div>
</div>
<!-- Program ID ends-->


<!-- Total Rent Starts-->
<div class="form-group {{$errors->has('rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Total Rent:</label>
    <div class="col-md-6">
        {{ Form::text('rent',null, array('class' => 'form-control','id'=>'rent','readonly')) }}
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
        {{ Form::text('adv_rent',null, array('class' => 'form-control','id'=>'adv_rent','readonly')) }}
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

<!-- Payable Amount Starts-->
<div class="form-group {{$errors->has('paid')?'has-error':''}}">
    <label class="col-md-3 control-label">Payable Amount:</label>
    <div class="col-md-6">
        {{ Form::text('paid',null, array('class' => 'form-control','id'=>'paid')) }}
        @if($errors->has('paid'))
            <span class="help-block"><strong>{{$errors->first('paid')}}</strong></span>
        @endif
    </div>
</div>
<!-- Payable Amount ends-->

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
        $('#party_id').on('change', function () {
            var party = $('#party_id').val();
            var csrf = '{{csrf_token()}}';

            $.ajax({
                url: "dueSubmit",
                data : {party:party, _token:csrf},
                async: true,
                type : "post"
            }).done(function(e){
                $("#program").html(e);
            });
        });
    </script>
@endsection
