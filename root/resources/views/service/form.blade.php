
<div class="form-group {{$errors->has('date')?'has-error':''}}">
    <label class="col-md-3 control-label">Date:</label>
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

<div class="form-group {{$errors->has('vehicle_id')?'has-error':''}}">
    {{ Form::label('vehicle_id', 'Vehicle No. :', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('vehicle_id',$repository->vehicles(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle Number']) }}
        @if($errors->has('vehicle_id'))
            <span class="help-block"><strong>{{$errors->first('vehicle_id')}}</strong></span>
        @endif
    </div>
</div>

<div class="form-group {{$errors->has('problem_id')?'has-error':''}}">
    {{ Form::label('problem_id', 'Problem Solved', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        <select name="problem_id"  id="problems" class="populate form-control" data-plugin-selectTwo>
            <option>Select Problem</option>
        </select>
    </div>
</div>


<!--DOOR OPEN-->
<div id="door">
    @if(count($problems) > 0)
        @foreach($problems as $problem)
            <div class="text-center" id="product{{ $num }}">
                <div class="col-md-11">
                    <div class="col-md-12">
                        <div class=" col-md-3">
                            <label class="control-label" for="employee_id">Fitted By</label>
                            <div class="">
                                {!! Form::select('employee_id'.$num,$repository->employees(),$problem->employee_id,['id'=>'employee_id'.$num,'class'=>'form-control','required','placeholder'=>'Select a Mechanic']) !!}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" for="product_id">Parts Name</label>
                            <div class="">
                                {!! Form::select('product_id'.$num,$repository->products(),$problem->product_id,['id'=>'product_id'.$num,'class'=>'form-control','required','placeholder'=>'Select parts']) !!}
                            </div>
                        </div>

                        <!-- Problem Starts-->
                        <div class="col-md-7 {{$errors->has('quantity')?'has-error':''}}">
                            <label class="control-label text-left" for="driver_adv">Problem</label>
                            {{ Form::text('quantity'.$num, $problem->problem, ['class' => 'form-control','id'=>'problem'.$num]) }}
                            @if($errors->has('problem'))
                                <span class="help-block"><strong>{{$errors->first('quantity')}}</strong></span>
                            @endif
                        </div>
                        <!-- Problem ends-->
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
                <div class="col-md-12">
                    <div class=" col-md-4">
                        <label class="control-label" for="employee_id1">Fitted By</label>
                        <div class="">
                            {!! Form::select('employee_id1',$repository->employees(),null,['id'=>'employee_id1','class'=>'form-control','required','placeholder'=>'Select a Mechanic']) !!}
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="control-label" for="product_id1">Parts Name</label>
                        <div class="">
                            {!! Form::select('product_id1',$repository->products(),null,['id'=>'product_id1','class'=>'form-control','required','placeholder'=>'Select Parts']) !!}
                        </div>
                    </div>

                    <!-- Quantity Starts-->
                    <div class="col-md-3 {{$errors->has('quantity1')?'has-error':''}}">
                        <label class="control-label text-left" for="problem1">Quantity</label>
                        {{ Form::text('quantity1', null, ['class' => 'form-control','id'=>'quantity1']) }}
                        @if($errors->has('quantity1'))
                            <span class="help-block"><strong>{{$errors->first('problem1')}}</strong></span>
                        @endif
                    </div>
                    <!-- Quantity Advance ends-->
                </div>
            </div>
            <!--REMOVE BUTTON START-->
            <div class="col-md-1 col-md-pull-1" >
                <div class="form-group " style="padding-top: 29px;">
                    <button type="button" class="btn btn-danger remove-btn" style="display: inline-block;">Remove</button>
                </div>
            </div>

            <!--REMOVE BUTTON END-->

        </div>
    @endif
</div>
<!--DOOR CLOSE-->

<div class="col-md-12">
    <hr>
</div>


<div class="col-md-12 col-md-offset-1">
    <div class="form-group col-md-2 ">
        <button class="btn btn-primary" onclick="addRow()" type="button">Add more...</button>
    </div>
</div>


<div class="form-group">
    <div class="col-md-2 col-md-offset-3">
        {{ Form::submit('Save',['class'=>'form-control btn btn-success']) }}
    </div>
    <div class="col-md-2">
        {{--<input type="reset" value="Reset"  class="form-control btn btn-warning">--}}
        {{ Form::reset('Reset',['class'=>'form-control btn btn-warning']) }}
    </div>
    <div class="col-md-2">
        {{--<input type="Button" value="Cancel"  class="form-control btn btn-danger">--}}
        <a href="{{ URL::previous() }}" role="button" class="form-control btn btn-danger">Back</a>
    </div>
</div>



{{--<!--Script Starts-->--}}
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

            $('select[id^="employee_id"]:last').prop('id','employee_id'+num).prop('name','employee_id'+num);
            $('select[id^="product_id"]:last').prop('id','product_id'+num).prop('name','product_id'+num);
            $('input[id^="quantity"]:last').prop('id','quantity'+num).prop('name','quantity'+num);
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
        $('#vehicle_id').on('change', function () {
            var vehicle = $('#vehicle_id').val();
            var csrf = '{{csrf_token()}}';

            $.ajax({
                url: "problemSubmit",
                data : {vehicle:vehicle, _token:csrf},
                async: true,
                type : "post"
            }).done(function(e){
                $("#problems").html(e);
            });
        });
    </script>
    {{--<script>--}}
        {{--$('#category_id').on('change', function () {--}}
            {{--var category = $('#category_id').val();--}}
            {{--var csrf = '{{csrf_token()}}';--}}

            {{--$.ajax({--}}
                {{--url: "partsSubmit",--}}
                {{--data : {category:category, _token:csrf},--}}
                {{--async: true,--}}
                {{--type : "post"--}}
            {{--}).done(function(e){--}}
                {{--$("#product_id").html(e);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
@endsection