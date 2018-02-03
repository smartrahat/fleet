
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

<!-- Serial Starts-->
<div class="form-group {{$errors->has('serial')?'has-error':''}}">
    <label class="col-md-3 control-label">Serial Number:</label>
    <div class="col-md-6">
        {{ Form::text('serial',null, array('class' => 'form-control')) }}
        @if($errors->has('serial'))
            <span class="help-block"><strong>{{$errors->first('serial')}}</strong></span>
        @endif
    </div>
</div>
<!-- Serial ends-->

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


<!-- Employee start-->
<div class="form-group {{$errors->has('employee_id')?'has-error':''}}">
    {{ Form::label('employee_id', 'SR Name:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('employee_id',$repository->employees(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select SR']) }}
        @if($errors->has('employee_id'))
            <span class="help-block"><strong>{{$errors->first('employee_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- Employee ends-->

<!-- Option Starts-->
<div class="form-group">
    {{ Form::label('option', 'Rent Option:', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::select('option',['Fixed','On Product Weight'],null,['class'=>'form-control populate','id'=>'option','data-plugin-selectTwo','placeholder'=>'Select Rent Option']) }}
    </div>
</div>
<!-- Option ends-->

<!-- Weight Starts-->
<div class="form-group" id='weight_div' hidden="hidden">
    <label class="col-md-3 control-label">Weight (KG/Tons):</label>
    <div class="col-md-6">
        {{ Form::text('weight',null, array('class' => 'form-control','id'=>'weight')) }}
    </div>
</div>
<!-- Weight ends-->

<!-- Rate Starts-->
<div class="form-group" id='rate_div' hidden="hidden">
    <label class="col-md-3 control-label">Rate (tk):</label>
    <div class="col-md-6">
        {{ Form::text('rate',null, array('class' => 'form-control','id'=>'rate')) }}
    </div>
</div>
<!-- Rate ends-->

<!-- Total Rent Starts-->
<div class="form-group {{$errors->has('rent')?'has-error':''}}">
    <label class="col-md-3 control-label">Total Rent:</label>
    <div class="col-md-6">
        {{ Form::text('rent',null, array('class' => 'form-control','id'=>'rent')) }}
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
        {{ Form::text('adv_rent',null, array('class' => 'form-control','id'=>'adv_rent')) }}
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

<div class="col-md-12">
    <hr>
</div>

<!--Trips parts-->
<!--DOOR OPEN-->
<div id="door">
    @if(count($trips) > 0)
        @foreach($trips as $trip)
            <div class="text-center" id="product{{ $num }}">
                <div class="col-md-11">
                    <div class="col-md-12 col-md-offset-1">
                        <div class=" col-md-2">
                            <label class="control-label" for="driver_id">Driver</label>
                            <div class="">
                                {!! Form::select('driver_id'.$num,$repository->drivers(),$trip->id,['id'=>'driver_id'.$num,'class'=>'form-control','required','placeholder'=>'Select a driver']) !!}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" for="vehicle_id">Vehicle</label>
                            <div class="">
                                {!! Form::select('vehicle_id'.$num,$repository->vehicles(),$trip->id,['id'=>'vehicle_id'.$num,'class'=>'form-control','required','placeholder'=>'Select a vehicle']) !!}
                            </div>
                        </div>

                        <!-- Driver Advance Starts-->
                        <div class="col-md-2 {{$errors->has('driver_adv')?'has-error':''}}">
                            <label class="control-label text-left" for="driver_adv">Driver Advance</label>
                            {{ Form::text('driver_adv'.$num, $trip->driver_adv, ['class' => 'form-control','id'=>'driver_adv'.$num]) }}
                            @if($errors->has('driver_adv'))
                                <span class="help-block"><strong>{{$errors->first('driver_adv')}}</strong></span>
                            @endif
                        </div>
                        <!-- Driver Advance ends-->

                        <!-- Driver Advance Fixed Starts-->

                        <div class="col-md-2 {{$errors->has('d_a_fix')?'has-error':''}}">
                            <label class="control-label text-center" for="d_a_fix">Drv Adv (Fixed)</label>
                            {{ Form::text('d_a_fix'.$num, $trip->d_a_fix, array('class' => 'form-control','id'=>'d_a_fix'.$num)) }}
                            @if($errors->has('d_a_fix'))
                                <span class="help-block"><strong>{{$errors->first('d_a_fix')}}</strong></span>
                            @endif
                        </div>

                        <!-- Driver Advance Fixed ends-->

                        <!-- Driver Extra Given Starts-->
                        <div class="col-md-2 {{$errors->has('extra_adv')?'has-error':''}}">
                            <label class="control-label text-left" for="extra_adv">Extra Advance</label>
                            {{ Form::text('extra_adv'.$num, $trip->extra_adv, array('class' => 'form-control','id'=>'extra_adv'.$num,'readonly')) }}
                            @if($errors->has('extra_adv'))
                                <span class="help-block"><strong>{{$errors->first('extra_adv')}}</strong></span>
                            @endif
                        </div>
                        <!-- Driver Extra Given ends-->
                        {{--</div>--}}
                        {{--<div id="door">--}}
                    </div>
                    <div class="col-md-12 col-md-offset-1">
                        <!-- Loading Starts-->
                        <div class="col-md-2 {{$errors->has('loading')?'has-error':''}}">
                            <label class="control-label text-center" for="loading">Loading Point</label>
                            {{ Form::text('loading'.$num,$trip->loading, array('class' => 'form-control','id'=>'loading'.$num)) }}
                            @if($errors->has('loading'))
                                <span class="help-block"><strong>{{$errors->first('loading')}}</strong></span>
                            @endif
                        </div>
                        <!-- Loading ends-->

                        <!-- Unloading Starts-->
                        <div class="col-md-2 {{$errors->has('unloading')?'has-error':''}}">
                            <label class="control-label text-center" for="unloading">Unloading Point</label>
                            {{ Form::text('unloading'.$num,$trip->unloading, array('class' => 'form-control','id'=>'unloading'.$num)) }}
                            @if($errors->has('unloading'))
                                <span class="help-block"><strong>{{$errors->first('unloading')}}</strong></span>
                            @endif
                        </div>
                        <!-- Unloading ends-->

                        <!-- Product Details Starts-->
                        <div class="col-md-2 {{$errors->has('product')?'has-error':''}}">
                            <label class="control-label text-center" for="product">Product Details</label>
                            {{ Form::text('product'.$num, $trip->product, array('class' => 'form-control','id'=>'product'.$num)) }}
                            @if($errors->has('product'))
                                <span class="help-block"><strong>{{$errors->first('product')}}</strong></span>
                            @endif
                        </div>
                        <!-- Product Details ends-->

                        <!-- Empty Container Starts-->
                        <div class="col-md-2 {{$errors->has('emp_container')?'has-error':''}}">
                            <label class="control-label text-center" for="emp_container">Empty Container</label>
                            {{ Form::text('emp_container'.$num, $trip->emp_container, array('class' => 'form-control','id'=>'emp_container'.$num)) }}
                            @if($errors->has('emp_container'))
                                <span class="help-block"><strong>{{$errors->first('emp_container')}}</strong></span>
                            @endif
                        </div>
                        <!-- Empty Container ends-->

                        <!-- Fuel Starts-->
                        <div class="col-md-2 {{$errors->has('fuel')?'has-error':''}}">
                            <label class="control-label text-center" for="loading">Fuel Qty (Ltr)</label>
                            {{ Form::text('fuel'.$num, $trip->fuel, array('class' => 'form-control','id'=>'fuel'.$num)) }}
                            @if($errors->has('fuel'))
                                <span class="help-block"><strong>{{$errors->first('fuel')}}</strong></span>
                            @endif
                        </div>
                        <!-- Fuel ends-->
                    </div>
                </div>
                <!--REMOVE BUTTON START-->
                <div class="col-md-1 col-md-pull-1" >
                    <div class="form-group " style="padding-top: 29px;">
                        <button type="button" class="btn btn-danger remove-btn" style="display: inline-block;">Remove</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
                <!--REMOVE BUTTON END-->

            </div>
            <div style="display:none">
                {{ $num++ }}
            </div>
        @endforeach
    @else
    <div class="text-center" id="product1">
        <div class="col-md-11">
            <div class="col-md-12 col-md-offset-1">
                <div class=" col-md-2">
                    <label class="control-label" for="driver_id">Driver</label>
                    <div class="">
                        {!! Form::select('driver_id1',$repository->drivers(),null,['id'=>'driver_id1','class'=>'form-control','required','placeholder'=>'Select a driver']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="control-label" for="vehicle_id">Vehicle</label>
                    <div class="">
                        {!! Form::select('vehicle_id1',$repository->vehicles(),null,['id'=>'vehicle_id1','class'=>'form-control','required','placeholder'=>'Select a vehicle']) !!}
                    </div>
                </div>

                <!-- Driver Advance Starts-->
                <div class="col-md-2 {{$errors->has('driver_adv1')?'has-error':''}}">
                    <label class="control-label text-left" for="driver_adv">Driver Advance</label>
                    {{ Form::text('driver_adv1', null, ['class' => 'form-control','id'=>'driver_adv1']) }}
                    @if($errors->has('driver_adv1'))
                        <span class="help-block"><strong>{{$errors->first('driver_adv1')}}</strong></span>
                    @endif
                </div>
                <!-- Driver Advance ends-->

                <!-- Driver Advance Fixed Starts-->

                <div class="col-md-2 {{$errors->has('d_a_fix1')?'has-error':''}}">
                    <label class="control-label text-center" for="d_a_fix">Drv Adv (Fixed)</label>
                    {{ Form::text('d_a_fix1', null, array('class' => 'form-control','id'=>'d_a_fix1')) }}
                    @if($errors->has('d_a_fix1'))
                        <span class="help-block"><strong>{{$errors->first('d_a_fix1')}}</strong></span>
                    @endif
                </div>

                <!-- Driver Advance Fixed ends-->

                <!-- Driver Extra Given Starts-->
                <div class="col-md-2 {{$errors->has('extra_adv1')?'has-error':''}}">
                    <label class="control-label text-left" for="extra_adv">Extra Advance</label>
                    {{ Form::text('extra_adv1', null, array('class' => 'form-control','id'=>'extra_adv1','readonly')) }}
                    @if($errors->has('extra_adv1'))
                        <span class="help-block"><strong>{{$errors->first('extra_adv1')}}</strong></span>
                    @endif
                </div>
                <!-- Driver Extra Given ends-->
                {{--</div>--}}
                {{--<div id="door">--}}
               </div>
             <div class="col-md-12 col-md-offset-1">
            <!-- Loading Starts-->
                <div class="col-md-2 {{$errors->has('loading1')?'has-error':''}}">
                    <label class="control-label text-center" for="loading1">Loading Point</label>
                    {{ Form::text('loading1', null, array('class' => 'form-control','id'=>'loading1')) }}
                    @if($errors->has('loading1'))
                        <span class="help-block"><strong>{{$errors->first('loading1')}}</strong></span>
                    @endif
                </div>
                <!-- Loading ends-->

                <!-- Unloading Starts-->
                <div class="col-md-2 {{$errors->has('unloading1')?'has-error':''}}">
                    <label class="control-label text-center" for="unloading1">Unloading Point</label>
                    {{ Form::text('unloading1', null, array('class' => 'form-control','id'=>'unloading1')) }}
                    @if($errors->has('unloading1'))
                        <span class="help-block"><strong>{{$errors->first('unloading1')}}</strong></span>
                    @endif
                </div>
                <!-- Unloading ends-->

                <!-- Product Details Starts-->
                <div class="col-md-2 {{$errors->has('product')?'has-error':''}}">
                    <label class="control-label text-center" for="product1">Product Details</label>
                    {{ Form::text('product1', null, array('class' => 'form-control','id'=>'product1')) }}
                    @if($errors->has('product1'))
                        <span class="help-block"><strong>{{$errors->first('product1')}}</strong></span>
                    @endif
                </div>
                <!-- Product Details ends-->

                <!-- Empty Container Starts-->
                <div class="col-md-2 {{$errors->has('emp_container1')?'has-error':''}}">
                    <label class="control-label text-center" for="emp_container">Empty Container</label>
                    {{ Form::text('emp_container1', null, array('class' => 'form-control','id'=>'emp_container1')) }}
                    @if($errors->has('emp_container1'))
                        <span class="help-block"><strong>{{$errors->first('emp_container')}}</strong></span>
                    @endif
                </div>
                <!-- Empty Container ends-->

                <!-- Fuel Starts-->
                <div class="col-md-2 {{$errors->has('fuel1')?'has-error':''}}">
                    <label class="control-label text-center" for="fuel">Fuel Qty (Ltr)</label>
                    {{ Form::text('fuel1', null, array('class' => 'form-control','id'=>'fuel1')) }}
                    @if($errors->has('fuel1'))
                        <span class="help-block"><strong>{{$errors->first('fuel1')}}</strong></span>
                    @endif
                </div>
                <!-- Fuel ends-->
            </div>
        </div>
        <!--REMOVE BUTTON START-->
        <div class="col-md-1 col-md-pull-1" >
            <div class="form-group " style="padding-top: 29px;">
                <button type="button" class="btn btn-danger remove-btn" style="display: inline-block;">Remove</button>
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
        // Add new row
        function addRow(){
            // get the last DIV which ID starts with ^= "product"
            var $div = $('div[id^="product"]:last');

            // Read the Number from that DIV's ID (i.e: 3 from "product3")
            // And increment that number by 1
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

            // Clone it and assign the new ID (i.e: from num 4 to ID "product4")
            var $klon = $div.clone().prop('id', 'product'+num);

            $('select[id^="driver_id"]:last').prop('id','driver_id'+num).prop('name','driver_id'+num);
            $('select[id^="vehicle_id"]:last').prop('id','vehicle_id'+num).prop('name','vehicle_id'+num);
            $('input[id^="driver_adv"]:last').prop('id','driver_adv'+num).prop('name','driver_adv'+num);
            $('input[id^="d_a_fix"]:last').prop('id','d_a_fix'+num).prop('name','d_a_fix'+num);
            $('input[id^="extra_adv"]:last').prop('id','extra_adv'+num).prop('name','extra_adv'+num);
            $('input[id^="loading"]:last').prop('id','loading'+num).prop('name','loading'+num);
            $('input[id^="unloading"]:last').prop('id','unloading'+num).prop('name','unloading'+num);
            $('input[id^="product"]:last').prop('id','product'+num).prop('name','product'+num);
            $('input[id^="emp_container"]:last').prop('id','emp_container'+num).prop('name','emp_container'+num);
            $('input[id^="fuel"]:last').prop('id','fuel'+num).prop('name','fuel'+num);

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
        //        $(document).ready( function() {
        $('#option').bind('change', function () {
            if( $('#option').val() == 1) {
                $('#rate_div').show();
                $('#weight_div').show();
                $('#rate').removeAttr('disabled');
                $('#weight').removeAttr('disabled');
            }else{
                $('#rate_div').hide();
                $('#weight_div').hide();
                $('#weight').val(0);
                $('#rate').val(0);
                $('#rate').attr('disabled','disabled');
                $('#weight').attr('disabled','disabled');
            }
        });
        //        });
    </script>
    <script>
        $(document).keyup(function () {
            var weight = $('#weight').val();
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

            for(var i=1;i<num;i++){
                var a = $("#product"+i+" input[id^='driver_adv']").val();var a = $("#product"+i+" input[id^='driver_adv']").val();
                var b = $("#product"+i+" input[id^='d_a_fix']").val();
                var c =$("#product"+i+" input[id^='extra_adv']").val(parseInt(a)-parseInt(b));
            }
        })
    </script>
@stop