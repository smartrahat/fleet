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
<div class="form-group {{$errors->has('supplier_id')?'has-error':''}}">
    {{ Form::label('supplier_id', 'Shop Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('supplier_id',$repository->suppliers(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Supplier']) }}
        @if($errors->has('supplier_id'))
            <span class="help-block"><strong>{{$errors->first('supplier_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Shop Name ends-->

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
<div class="form-group {{ $errors->has('vehicle_id')?'has-error':'' }}">
    {{ Form::label('vehicle_id', 'Vehicle No:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('vehicle_id',$repository->vehicles(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle']) }}
        @if($errors->has('vehicle_id'))
            <span class="help-block"><strong>{{$errors->first('vehicle_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Vehicle Number ends-->

<!-- Category Starts-->
<div class="form-group {{$errors->has('category_id')?'has-error':''}}">
    {{ Form::label('category_id', 'Category:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('category_id',$repository->categories(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Category']) }}
        @if($errors->has('category_id'))
            <span class="help-block"><strong>{{$errors->first('category_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Category ends-->

<!-- Parts Name Starts-->
<div class="form-group {{$errors->has('parts_id')?'has-error':''}}">
    {{ Form::label('parts_id', 'Parts Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('parts_id',$repository->parts(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Parts']) }}
        @if($errors->has('parts_id'))
            <span class="help-block"><strong>{{$errors->first('parts_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Parts Name ends-->

<!-- Brand name Starts-->
<div class="form-group {{$errors->has('brand_id')?'has-error':''}}p">
    {{ Form::label('brand_id', 'Brand Name:', array('class'=>'col-md-3 control-label')) }}
    {{--<label class="col-md-3 control-label">Name</label>--}}
    <div class="col-md-6">
        {{ Form::select('brand_id',$repository->brands(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Brand']) }}
        @if($errors->has('brand_id'))
            <span class="help-block"><strong>{{$errors->first('brand_id')}}</strong></span>
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
<div class="form-group {{$errors->has('total')?'has-error':''}}">
    <label class="col-md-3 control-label">Total:</label>
    <div class="col-md-6">
        {{ Form::text('total',null, array('class' => 'form-control','id'=>'total','readonly')) }}
        @if($errors->has('total'))
            <span class="help-block"><strong>{{$errors->first('total')}}</strong></span>
        @endif
    </div>
</div>
<!-- Total ends-->

<!-- Advance Starts-->
<div class="form-group {{$errors->has('advance')?'has-error':''}}">
    <label class="col-md-3 control-label">Advance:</label>
    <div class="col-md-6">
        {{ Form::text('advance',null, array('class' => 'form-control','id'=>'advance')) }}
        @if($errors->has('advance'))
            <span class="help-block"><strong>{{$errors->first('advance')}}</strong></span>
        @endif
    </div>
</div>
<!-- Advance ends-->

<!-- Due Starts-->
<div class="form-group {{$errors->has('due')?'has-error':''}}">
    <label class="col-md-3 control-label">Due:</label>
    <div class="col-md-6">
        {{ Form::text('due',null, ['class' => 'form-control','id'=>'due','readonly']) }}
        @if($errors->has('due'))
            <span class="help-block"><strong>{{$errors->first('due')}}</strong></span>
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
        if(weight>=0 && rate>=0){
            $('#total').val(parseFloat(weight)*parseFloat(rate));
        }
    })
</script>

<script>
    $(document).keyup(function () {
        var total = $('#total').val();
        var advance = $('#advance').val();
        $('#due').val(parseFloat(total) - parseFloat(advance));
    })
</script>