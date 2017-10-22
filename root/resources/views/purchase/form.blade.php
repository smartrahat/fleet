<!--Date starts-->
<div class="form-group {{$errors->has('date')?'has-error':''}}">
    <label class="col-md-3 control-label">Purchase Date:</label>
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

<!-- Shop Name Starts-->
<div class="form-group {{$errors->has('shop')?'has-error':''}}">
    {{ Form::label('shop', 'Shop Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('vehicleNo',$repository->suppliers(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Supplier']) }}
        @if($errors->has('shop'))
            <span class="help-block"><strong>{{$errors->first('shop')}}</strong></span>
        @endif
    </div>
</div>
<!-- Shop Name ends-->

<!-- Mobile Starts-->
<div class="form-group {{$errors->has('mobile')?'has-error':''}}">
    {{ Form::label('mobile', 'Mobile No:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('mobile',null, array('class' => 'form-control')) }}
        @if($errors->has('mobile'))
            <span class="help-block"><strong>{{$errors->first('mobile')}}</strong></span>
        @endif
    </div>
</div>
<!-- Mobile ends-->

<!-- Voucher Starts-->
<div class="form-group {{$errors->has('voucher')?'has-error':''}}">
    {{ Form::label('voucher', 'Voucher No:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('voucher',null, array('class' => 'form-control')) }}
        @if($errors->has('voucher'))
            <span class="help-block"><strong>{{$errors->first('voucher')}}</strong></span>
        @endif
    </div>
</div>
<!-- Mobile ends-->

<!-- Vehicle Number Starts-->
<div class="form-group {{ $errors->has('vehicleNo')?'has-error':'' }}">
    {{ Form::label('VehicleNo', 'Vehicle No:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('vehicleNo',$repository->vehicles(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle']) }}
        @if($errors->has('vehicleNo'))
            <span class="help-block"><strong>{{$errors->first('vehicleNo')}}</strong></span>
        @endif
    </div>
</div>
<!-- Vehicle Number ends-->

<!-- Category Starts-->
<div class="form-group {{$errors->has('category')?'has-error':''}}">
    {{ Form::label('category', 'Category:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('category',$repository->categories(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Category']) }}
        @if($errors->has('category'))
            <span class="help-block"><strong>{{$errors->first('category')}}</strong></span>
        @endif
    </div>
</div>
<!-- Category ends-->

<!-- Parts Name Starts-->
<div class="form-group {{$errors->has('parts')?'has-error':''}}">
    {{ Form::label('parts', 'Parts Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('parts',$repository->parts(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Parts']) }}
        @if($errors->has('parts'))
            <span class="help-block"><strong>{{$errors->first('parts')}}</strong></span>
        @endif
    </div>
</div>
<!-- Parts Name ends-->

<!-- Brand name Starts-->
<div class="form-group {{$errors->has('brand')?'has-error':''}}p">
    {{ Form::label('brand', 'Brand Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('brand',$repository->brands(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Brand']) }}
        @if($errors->has('brand'))
            <span class="help-block"><strong>{{$errors->first('brand')}}</strong></span>
        @endif
    </div>
</div>
<!-- Brand name ends-->

<!-- Quantity Starts-->
<div class="form-group {{$errors->has('quantity')?'has-error':''}}">
    {{ Form::label('quantity', 'Quantity:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::text('quantity',null, array('class' => 'form-control', 'id'=>'quantity')) }}
        @if($errors->has('quantity'))
            <span class="help-block"><strong>{{$errors->first('quantity')}}</strong></span>
        @endif
    </div>
</div>
<!-- Quantity ends-->

<!-- Rate Starts-->
<div class="form-group" id='rate_div'>
    <label class="col-md-3 control-label">Rate (tk):</label>
    <div class="col-md-6">
        {{ Form::text('rate',null, array('class' => 'form-control','id'=>'rate')) }}
    </div>
</div>
<!-- Rate ends-->

<!-- Total Starts-->
<div class="form-group {{$errors->has('rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Total Rent:</label>
    <div class="col-md-6">
        {{ Form::text('rent',null, array('class' => 'form-control','id'=>'rent')) }}
        @if($errors->has('rent'))
            <span class="help-block"><strong>{{$errors->first('rent')}}</strong></span>
        @endif
    </div>
</div>
<!-- Total ends-->

<!-- Advance Starts-->
<div class="form-group {{$errors->has('adv_rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Advance Rent:</label>
    <div class="col-md-6">
        {{ Form::text('adv_rent',null, array('class' => 'form-control','id'=>'adv_rent')) }}
        @if($errors->has('adv_rent'))
            <span class="help-block"><strong>{{$errors->first('adv_rent')}}</strong></span>
        @endif
    </div>
</div>
<!-- Advance ends-->

<!-- Due Starts-->
<div class="form-group {{$errors->has('due_rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Due Rent:</label>
    <div class="col-md-6">
        {{ Form::text('due_rent',null, ['class' => 'form-control','id'=>'due_rent','readonly']) }}
        @if($errors->has('due_rent'))
            <span class="help-block"><strong>{{$errors->first('due_rent')}}</strong></span>
        @endif
    </div>
</div>
<!-- Due ends-->

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



<script>
    $(document).keyup(function () {
        var weight = $('#quantity').val();
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