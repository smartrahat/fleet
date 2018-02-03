@extends('layouts.admin')

@section('title','Garage')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Garaged Vehicles</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Dashboard</span></li>
                </ol>
                <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
            </div>
        </div>
        <!-- start: page -->


        <div class="row">
            <div class="col-xs-12">
                <section class="panel">


                    <!-- Search Panel -->
                    <div class="panel panel-body no-print">
                        {!! Form::open(['action'=>'GarageEntryController@index','method'=>'get','class'=>'form-inline']) !!}
                        <div class="col-md-12 form-group {{$errors->has('garage_id')?'has-error':''}}">
                            {{ Form::label('garage_id', 'Garage', ['class'=>'col-md-1 control-label']) }}
                            <div class="col-md-4">
                                {{ Form::select('garage_id',$repository->garages(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Garage']) }}
                                @if($errors->has('garage_id'))
                                    <span class="help-block"><strong>{{$errors->first('garage_id')}}</strong></span>
                                @endif
                            </div>
                            {!! Form::submit('GO',['class'=>'btn btn-success']) !!}
                            <a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>
                        </div>

                        {!! Form::close() !!}
                    </div>
                    <!-- /Search Panel -->

                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">List of Garaged Vehicles</h2>
                    </header>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Vehicle No</th>
                                    <th>Entry Date</th>
                                    <th>Detected Problems</th>
                                    <th>Solved Problems</th>
                                    {{--<th>Progress</th>--}}
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($garageEntries as $garageEntry)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $garageEntry->vehicle->vehicleNo }}</td>
                                        <td>{{ $garageEntry->date }}</td>
                                        <td>
                                            <ul>
                                                @foreach($garageEntry->vehicle->problems as $problem)
                                                    <li>{{ $problem->problem }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                            @foreach($garageEntry->vehicle->problems->where('problem_status',0) as $problem)
                                                    <li>{{ $problem->problem }}</li>
                                            @endforeach
                                            </ul>
                                        </td>
                                        {{--<td>--}}
                                            {{--<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{{ (100-($garageEntry->vehicle->problems->sum('problem_status')*100)/$garageEntry->vehicle->problems->count('vehicle_id')) }}%;">{{ round(100-($garageEntry->vehicle->problems->sum('problem_status')*100)/($garageEntry->vehicle->problems->count('vehicle_id'))) }}%</div>--}}
                                        {{--</td>--}}
                                        <td class="text-center">
                                            {{ Form::open(['action'=>['GarageEntryController@destroy',$garageEntry->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('GarageEntryController@edit',$garageEntry->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                    {{--<tr>--}}
                                        {{--<td colspan="4" class="text-right">Total Expense</td>--}}
                                        {{--<td class="text-right">{{$total}}/-</td>--}}
                                        {{--<td></td>--}}
                                    {{--</tr>--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </section>
    <!-- end: page -->
@endsection

@section('script')
    <script>
        function confirmDelete(){
            var x = confirm('Are you sure you want to delete this record?');
            return !!x;
        }
    </script>
@stop