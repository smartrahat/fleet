
<!-- User Starts-->
<div class="form-group {{$errors->has('employee_id')? 'has-error':''}}">
    {{ Form::label('employee_id', 'User Name:', array('class'=>'col-md-3 control-label')) }}
    <div class="col-md-6">
        {{ Form::select('employee_id',$repository->employees(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select User']) }}
        @if($errors->has('employee_id'))
            <span class="help-block"><strong>{{$errors->first('employee_id')}}</strong></span>
        @endif
    </div>
</div>
<!-- User ends-->
<!-- Vehicle Checkbox Starts-->
<div class="form-group">

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-condensed mb-none">
                <thead>
                <tr>
                    <th class="text-center" colspan="2">ID</th>
                    <th class="text-center">Vehicle Number</th>
                    <th class="text-center">Manager Name</th>
                    <th class="text-center">Owner Name</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vehicles as $vehicle)
                    <tr>
                        <td class="text-center">{{ Form::checkbox('vehicles[]', $vehicle->id, null, ['class' => 'field']) }}</td>
                        <td class="text-center">{{$vehicle->id}}</td>
                        <td class="text-center">{{$vehicle->vehicleNo or ''}}</td>
                        <td class="text-center">{{$vehicle->employee->name or ''}}</td>
                        <td>{{$vehicle->owner->name or ''}}</td>
                        <td>{{$vehicle->status->name or ''}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Submit button -->
<div class="form-group">
    <div class="col-md-2 col-md-offset-3">
        {{ Form::submit($submitButtonText,['class'=>'form-control btn btn-success',$vehicle->id]) }}
    </div>
    <div class="col-md-2">
        {{ Form::reset('Reset',['class'=>'form-control btn btn-warning']) }}
    </div>
    <div class="col-md-2">
        <a href="{{ URL::previous() }}" role="button" class="form-control btn btn-danger">Cancel</a>
    </div>
</div>
<!-- ends-->