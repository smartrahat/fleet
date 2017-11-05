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

<!-- Supplier Name Starts-->
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
<!-- Supplier Name ends-->

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
<!-- Voucher ends-->

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




<div class="col-md-12">
    <hr>
</div>

<!--Product Details Start-->
<!--DOOR OPEN-->
<div id="door">
    @if(count($products) > 0)
        @foreach($products as $product)
            <div class="text-center" id="product{{ $num }}">
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class=" col-md-2">
                            <label class="control-label" for="category_id">Category</label>
                            <div class="">
                                {!! Form::select('category_id',$repository->categories(),null,['id'=>'category_id','class'=>'form-control','required','placeholder'=>'Select a category']) !!}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" for="parts_id">Parts</label>
                            <div class="">
                                {!! Form::select('parts_id',$repository->parts(),null,['id'=>'parts_id','class'=>'form-control','required','placeholder'=>'Select a part']) !!}
                            </div>
                        </div>

                        <div class="col-md-2">
                            <label class="control-label" for="brand_id">Brand</label>
                            <div class="">
                                {!! Form::select('brand_id',$repository->brands(),null,['id'=>'brand_id','class'=>'form-control','required','placeholder'=>'Select a brand']) !!}
                            </div>
                        </div>

                        <!-- Quantity Starts-->
                        <div class="col-md-2 {{$errors->has('quantity')?'has-error':''}}">
                            <label class="control-label text-left" for="quantity1">Quantity</label>
                            {{ Form::text('quantity', null, ['class' => 'form-control','id'=>'quantity']) }}
                            @if($errors->has('quantity'))
                                <span class="help-block"><strong>{{$errors->first('quantity')}}</strong></span>
                            @endif
                        </div>
                        <!-- Quantity ends-->

                        <!-- Rate Starts-->
                        <div class="col-md-2 {{$errors->has('rate')?'has-error':''}}">
                            <label class="control-label text-left" for="rate1">Rate(tk)</label>
                            {{ Form::text('rate', null, ['class' => 'form-control','id'=>'rate']) }}
                            @if($errors->has('rate'))
                                <span class="help-block"><strong>{{$errors->first('rate')}}</strong></span>
                            @endif
                        </div>
                        <!-- Rate ends-->

                        <!-- Total Starts-->
                        <div class="col-md-2 {{$errors->has('p_total')?'has-error':''}}">
                            <label class="control-label text-left" for="p_total1">Total</label>
                            {{ Form::text('p_total', null, ['class' => 'form-control','id'=>'p_total','readonly']) }}
                            @if($errors->has('p_total'))
                                <span class="help-block"><strong>{{$errors->first('p_total')}}</strong></span>
                            @endif
                        </div>
                        <!-- Total ends-->

                    </div>
                </div>


                <!--REMOVE BUTTON START-->
                <div class="col-md-1 " >
                    <div class="form-group " style="padding-top: 29px;">
                        <button type="button" class="btn btn-danger remove-btn" style="display: inline-block;">X</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <!--REMOVE BUTTON END-->

            </div>

        @endforeach
    @else
        <div class="text-center" id="product1">
            <div class="col-md-11">
                <div class="col-md-12 col-md-offset-1" style="padding-left:0; padding-right: 40px;">
                    <div class=" col-md-2">
                        <label class="control-label" for="category_id">Category</label>
                        <div class="">
                            {!! Form::select('category_id1',$repository->categories(),null,['id'=>'category_id1','class'=>'form-control','required','placeholder'=>'Select a category']) !!}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="control-label" for="parts_id">Parts</label>
                        <div class="">
                            {!! Form::select('parts_id1',$repository->parts(),null,['id'=>'parts_id1','class'=>'form-control','required','placeholder'=>'Select a part']) !!}
                        </div>
                    </div>

                    <div class="col-md-2">
                        <label class="control-label" for="brand_id">Brand</label>
                        <div class="">
                            {!! Form::select('brand_id1',$repository->brands(),null,['id'=>'brand_id1','class'=>'form-control','required','placeholder'=>'Select a brand']) !!}
                        </div>
                    </div>

                    <!-- Quantity Starts-->
                    <div class="col-md-2 {{$errors->has('quantity1')?'has-error':''}}">
                        <label class="control-label text-left" for="quantity1">Quantity</label>
                        {{ Form::text('quantity1', null, ['class' => 'form-control','id'=>'quantity1']) }}
                        @if($errors->has('quantity1'))
                            <span class="help-block"><strong>{{$errors->first('quantity1')}}</strong></span>
                        @endif
                    </div>
                    <!-- Quantity ends-->

                    <!-- Rate Starts-->
                    <div class="col-md-2 {{$errors->has('rate1')?'has-error':''}}">
                        <label class="control-label text-left" for="rate1">Rate(tk)</label>
                        {{ Form::text('rate1', null, ['class' => 'form-control','id'=>'rate1']) }}
                        @if($errors->has('rate1'))
                            <span class="help-block"><strong>{{$errors->first('rate1')}}</strong></span>
                        @endif
                    </div>
                    <!-- Rate ends-->

                    <!-- Total Starts-->
                    <div class="col-md-2 {{$errors->has('p_total1')?'has-error':''}}">
                        <label class="control-label text-left" for="p_total1">Total</label>
                        {{ Form::text('p_total1', null, ['class' => 'form-control','id'=>'p_total1','readonly']) }}
                        @if($errors->has('p_total1'))
                            <span class="help-block"><strong>{{$errors->first('p_total1')}}</strong></span>
                        @endif
                    </div>
                    <!-- Total ends-->

                </div>
            </div>


            <!--REMOVE BUTTON START-->
            <div class="col-md-1 " >
                <div class="form-group " style="padding-top: 29px;">
                    <button type="button" class="btn btn-danger remove-btn" style="display: inline-block;">X</button>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <!--REMOVE BUTTON END-->

        </div>
    @endif
</div>
<!--DOOR CLOSE-->


<div class="col-md-12 col-md-offset-1">
    <div class="form-group col-md-2 ">
        <button class="btn btn-primary" onclick="addRow()" type="button">Add more...</button>
    </div>
</div>



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


@section('script')
    <script>
        // Add new row
        function addRow(){
            // get the last DIV which ID starts with ^= "product"
            var $div = $('div[id^="product"]:last');

            // Read the Number from that DIV's ID (i.e: 3 from "product3")
            // And increment that number by 1
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

            // Clone it and assign the new ID (i.e: from num 4 to ID "product4")
            var $klon = $div.clone().prop('id', 'product'+num);

            $('select[id^="category_id"]:last').prop('id','category_id'+num).prop('name','category_id'+num);
            $('select[id^="parts_id"]:last').prop('id','parts_id'+num).prop('name','parts_id'+num);
            $('select[id^="brand_id"]:last').prop('id','brand_id'+num).prop('name','brand_id'+num);
            $('input[id^="quantity"]:last').prop('id','quantity'+num).prop('name','quantity'+num);
            $('input[id^="rate"]:last').prop('id','rate'+num).prop('name','rate'+num);
            $('input[id^="p_total"]:last').prop('id','p_total'+num).prop('name','p_total'+num);


            // >>> Append $klon wherever you want
            $klon.appendTo($("#door"));
        }
    </script>
    <script>
        // remove "remove button" if only one row left
        $(document).on('click ready',function(){
            if($('div[id^="product"]').length > 1){
                $(".remove-btn").show()
            }else{
                $(".remove-btn").hide()
            }
        });
    </script>
    <script>
        // remove program's row
        setInterval(function(){
            $(".remove-btn").click(function(){
                var $div = $('div[id^="product"]');
                if($div.length > 1){
                    $(this).closest($div).remove()
                }
            });
        },1000)

    </script>



    <script>
        $(document).keyup(function () {
            var total = $('#total').val();
            var advance = $('#advance').val();
            $('#due').val(parseFloat(total) - parseFloat(advance));
        })
    </script>

    {{--<script>--}}
    {{--$(document).keyup(function () {--}}
    {{--var driver_adv = $('#driver_adv1').val();--}}
    {{--var d_a_fix = $('#d_a_fix1').val();--}}
    {{--$('#extra_adv1').val(parseInt(driver_adv) - parseInt(d_a_fix));--}}
    {{--})--}}
    {{--</script>--}}
    <script>
        $(document).keyup(function () {
            var $div = $('div[id^="product"]:last');
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
            var total = 0;

            for(var i=1;i<num;i++) {
                var a = $("#product" + i + " input[id^='rate']").val();
                var b = $("#product" + i + " input[id^='quantity']").val();
                var c = $("#product" + i + " input[id^='p_total']").val(parseFloat(a) * parseInt(b));

                if (isNaN(a)) {a = 0}
                if (isNaN(b)) {b = 0}

                $("#product" + i + " input[id^=t]").val(Math.floor(a * b));

                total += Math.floor((a * b));
            }
            $("#total").val(total);
        })
    </script>
    {{--<script>--}}
        {{--var $div = $('div[id^="product"]:last');--}}
        {{--var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;--}}

        {{--//var count = $('div[id^="products"]').length+1;--}}
        {{--//alert(count);--}}
        {{--var total = 0;--}}
        {{--for(var i=1;i<num;i++){--}}
            {{--var a = parseFloat($("#product"+i+" input[id^='quantity']").val());--}}
            {{--var b = parseFloat($("#product"+i+" input[id^='rate']").val());--}}

            {{--if(isNaN(a)){a=0}--}}
            {{--if(isNaN(b)){b=0}--}}

            {{--$("#product"+i+" input[id^=t]").val(Math.floor(a*b));--}}

            {{--total += Math.floor((a*b));--}}
        {{--}--}}
        {{--$("#total").val(total);--}}

    {{--</script>--}}

@stop