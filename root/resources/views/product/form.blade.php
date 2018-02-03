
<!-- Brand  Starts -->
<div class="form-group {{ $errors->has('brand_id') ? ' has-error' : '' }}">
    {{ Form::label('brand', 'Brand:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('brand_id',$repository->brands(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Brands']) }}
        @if ($errors->has('brand_id'))
            <span class="help-block"><strong>{{ $errors->first('brand_id') }}</strong></span>
        @endif
    </div>
</div>
<!-- Brand ends -->

<!-- Categories  Starts -->
<div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
    {{ Form::label('category', 'Category:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('category_id',$repository->categories(),null,['class'=>'form-control populate','id'=>'category_id','data-plugin-selectTwo','placeholder'=>'Select Categories']) }}
        @if ($errors->has('category_id'))
            <span class="help-block"><strong>{{ $errors->first('category_id') }}</strong></span>
        @endif
    </div>
</div>
<!--Categories ends -->

<!-- Parts  Starts -->
<div class="form-group {{ $errors->has('parts_id') ? ' has-error' : '' }}">
    {{ Form::label('parts_id', 'Parts:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        <select name="parts_id"  id="parts" class="populate form-control" data-plugin-selectTwo>
            <option>Select Parts</option>
        </select>
    </div>
</div>
<!--Parts ends -->

<!-- Parts  Starts -->
<div class="form-group {{ $errors->has('unit_id') ? ' has-error' : '' }}">
    {{ Form::label('part', 'Unit:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('unit_id',$repository->units(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Unit']) }}
        @if ($errors->has('unit_id'))
            <span class="help-block"><strong>{{ $errors->first('unit_id') }}</strong></span>
        @endif
    </div>
</div>
<!--Parts ends -->

<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
    {{ Form::label('name', 'Product Name:', ['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::text('name', null, ['class' => 'form-control','required']) }}
        @if ($errors->has('name'))
            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {{ Form::label('description','Description:',['class'=>'col-md-3 control-label']) }}
    <div class="col-md-6">
        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
        @if ($errors->has('description'))
            <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
        @endif
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
<!-- ends-->



@section('script')
    {{--<script>--}}
        {{--$('#category_id').on('change', function () {--}}
            {{--var category = $('#category_id').val();--}}
            {{--var csrf = '{{csrf_token()}}';--}}

            {{--$.ajax({--}}
                {{--url: "partsLoad",--}}
                {{--data : {category:category, _token:csrf},--}}
                {{--type : "post"--}}
            {{--}).done(function(e){--}}
                {{--alert(e);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

    <script>
    $('#category_id').on('change', function () {
    var category = $('#category_id').val();
    var csrf = '{{csrf_token()}}';

        $.ajax({
            url: "partsLoad",
            data : {category:category, _token:csrf},
            async: true,
            type : "post"
        }).done(function(e){
            $("#parts").html(e);
        });
    });
    </script>
@endsection