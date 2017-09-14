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
            <div class="form-group">
                <div class="input-group input-daterange" data-plugin-datepicker>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    {!! Form::text('start',null,['class'=>'form-control','required']) !!}
                    <span class="input-group-addon">to</span>
                    {!! Form::text('end',null,['class'=>'form-control','required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::select('vehicle',$repository->vehicles(),null,['class'=>'form-control populate','data-plugin-selectTwo'=>'','placeholder'=>'Select Vehicle']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('GO',['class'=>'btn btn-success']) !!}
                <a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>
            </div>
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
                            <th>Location</th>
                            <th>Driver Adv. Fixed</th>
                            <th>SR</th>
                            <th>Party</th>
                            <th>Empty Container</th>
                            <th>Vehicle Mobile</th>
                            <th>Loading Point</th>
                            <th>Unloading Point</th>
                            <th>Details</th>
                            <th>Advance</th>
                            <th>Due</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trips as $trip)
                            <tr>
                                <td>{{ $trip->id }}</td>
                                <td>{{ $trip->program->vehicle->vehicleNo }}</td>
                                <td>{{ $trip->unloading }}</td>
                                <td class="text-right">{{ number_format($trip->driver_adv) }}/-</td>
                                <td>{{ $trip->program->employee->name }}</td>
                                <td>{{ $trip->program->party->name }}</td>
                                <td>{{ $trip->emp_container }}</td>
                                <td>{{ $trip->program->vehicle->mobile }}</td>
                                <td>{{ $trip->loading }}</td>
                                <td>{{ $trip->unloading }}</td>
                                <td>{{ $trip->product }}</td>
                                <td class="text-right">{{ number_format($trip->program->adv_rent) }}/-</td>
                                <td class="text-right">{{ number_format($trip->program->due_rent) }}/-</td>
                                <td class="text-right">{{ number_format($trip->program->rent) }}/-</td>
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