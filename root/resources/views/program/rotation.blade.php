@extends('layouts.admin')

@section('title','Rotation List')

@section('content')
    <section role="main" class="content-body">

        <header class="page-header no-print">
            <h2>Program Rotation Report</h2>
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

        <!-- Search Panel -->
        <div class="panel panel-body no-print">
            {!! Form::open(['action'=>'ProgramController@rotation','method'=>'get','class'=>'form-inline']) !!}
            <div class="form-group {{$errors->has('date')?'has-error':''}}">
                <label class="control-label">Program Date: </label>
                    <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                        {{ Form::text('date', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"','placeholder'=>'YYYY-MM-DD' )) }}
                    </div>
                    @if($errors->has('date'))
                        <span class="help-block"><strong>{{$errors->first('date')}}</strong></span>
                    @endif
                </div>
                {!! Form::submit('GO',['class'=>'btn btn-success']) !!}
                <a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>
            {!! Form::close() !!}
        </div>
        <!-- /Search Panel -->

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="javascript:window.print()"><i class="fa fa-print"></i></a>
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">Rotation Report</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vehicle</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Driver Adv. Fixed</th>
                            <th>SR</th>
                            <th>Party</th>
                            <th>Empty Container</th>
                            <th>Vehicle Mobile</th>
                            <th>Loading Point</th>
                            <th>Unloading Point</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Advance</th>
                            <th>Due</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->vehicleNo }}</td>
                                <td>{{ $vehicle->status->name }}</td>
                                @foreach($vehicle->programs->where('date',$date) as $program)
                                    <td>{{ $program->trip->unloading or '' }}</td>
                                    <td class="text-right">{{ $program->trip->driver_adv or 0 }}/-</td>
                                    <td>{{ $program->employee->name or '' }}</td>
                                    <td>{{ $program->party->name or '' }}</td>
                                    <td>{{ $program->trip->emp_container or '' }}</td>
                                    <td>{{ $program->vehicle->mobile or '' }}</td>
                                    <td>{{ $program->trip->loading or '' }}</td>
                                    <td>{{ $program->trip->unloading or '' }}</td>
                                    <td>{{ $program->trip->product or '' }}</td>
                                    <td class="text-right">{{ number_format($program->rent) }}/-</td>
                                    <td class="text-right">{{ number_format($program->adv_rent) }}/-</td>
                                    <td class="text-right">{{ number_format($program->due_rent) }}/-</td>
                                @endforeach
                                @if($vehicle->programs->count() == 0 || $vehicle->programs->where('date',$date)->count() == 0)
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><br>
            </div>
        </section>
    </section>
@endsection

@section('script')
    <script>
        function confirmDelete(){
            var x = confirm('Are you sure you want to delete this record?');
            return !!x;
        }
    </script>
@stop