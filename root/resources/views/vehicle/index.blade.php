@extends('layouts.admin')

@section('title','Vehicles')

@section('content')
    <section role="main" class="content-body">

        <header class="page-header">
            <h2>Vehicles</h2>
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

        <!-- Search Panel Start -->
        <div class="panel panel-body no-print">
            {!! Form::open(['action'=>'VehicleController@index','method'=>'get','class'=>'form-inline']) !!}
            <div class="form-group">
                {{--<div class="input-group input-daterange" data-plugin-datepicker>--}}
                    {{--<span class="input-group-addon"><i class="fa fa-calendar"></i></span>--}}
                    {{--{!! Form::text('start',null,['class'=>'form-control','required']) !!}--}}
                    {{--<span class="input-group-addon">to</span>--}}
                    {{--{!! Form::text('end',null,['class'=>'form-control','required']) !!}--}}
                {{--</div>--}}
            </div>
            <div class="form-group">
                {{--{!! Form::select('warehouse',$repository->warehouses(),null,['class'=>'form-control populate','data-plugin-selectTwo'=>'','placeholder'=>'Select Warehouse',$isReadOnly]) !!}--}}
            </div>
            <div class="form-group">
                {{--{!! Form::select('customer',$repository->customers(),null,['class'=>'form-control populate','data-plugin-selectTwo'=>'','placeholder'=>'Select Customer']) !!}--}}
            </div>
            <div class="form-group">
{{--                {!! Form::select('invoice',$repository->invoices(),null,['class'=>'form-control populate','data-plugin-selectTwo'=>'','placeholder'=>'Select Invoice']) !!}--}}
            </div>
            <div class="form-group">
                {{ Form::text('q',null,['class'=>'form-control','placeholder'=>'What are you looking for?']) }}
            </div>
            <div class="form-group">
                {!! Form::submit('GO',['class'=>'btn btn-success']) !!}
                <a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- Search Panel End -->

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    {{--<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>--}}
                </div>

                <h2 class="panel-title">Vehicle Information</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <a href="{{ action('VehicleController@create') }}" role="button" class="btn btn-success">Add Vehicle</a><br /><br />
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Description</th>
                            <th>Owner</th>
                            <th>Road Permit</th>
                            <th>TAX Token</th>
                            <th>Insurance</th>
                            <th>Fitness</th>
                            <th>Reg. Certificate</th>
                            <th>Numbers</th>
                            <th>Status</th>
                            <th>Mobile</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->id }}</td>
                            <td>{{ $vehicle->employee->name or '' }}</td>
                            <td>
                                {{ $vehicle->brand->name or '' }}
                                {{ $vehicle->type->name or '' }}
                            </td>
                            <td>{{ $vehicle->Owner->name or '' }}</td>
                            <td>
                                {{ $vehicle->roadPermitStart or '' }}
                                {{ $vehicle->roadPermitEnd or '' }}
                            </td>
                            <td>
                                {{ $vehicle->taxTokenStart or '' }}
                                {{ $vehicle->taxTokenEnd or '' }}
                            </td>
                            <td>
                                {{ $vehicle->insuranceStart or '' }}
                                {{ $vehicle->insuranceEnd or '' }}
                            </td>
                            <td>
                                {{ $vehicle->fitnessStart or '' }}
                                {{ $vehicle->fitnessEnd or '' }}
                            </td>
                            <td>
                                {{ $vehicle->regCertStart or '' }}
                                {{ $vehicle->regCertEnd or '' }}
                            </td>
                            <td>
                                {{ $vehicle->vehicleNo or '' }}
                                {{ $vehicle->engineNo or '' }}
                                {{ $vehicle->chasesNo or '' }}
                            </td>
                            <td>
                                {{ $vehicle->status->name or '' }}

                            </td>
                            <td>
                                {{ $vehicle->mobile or ''}}
                            </td>
                            <td>
                                <img src='{{asset("images/vehicles/") }}/{{ $vehicle->image != null ? $vehicle->image : 'demo.png' }}' height="100" >
                            </td>
                            <td>
                                {{ Form::open(['action'=>['VehicleController@destroy',$vehicle->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                <a href="{{ action('VehicleController@edit',$vehicle->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit" title="Edit"></i></a>
                                {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                <a href="{{ action('VehicleController@show',$vehicle->id) }}" role="button" class="btn btn-info"><i class="fa fa-info-circle" title="Information"></i></a>
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="no-print">
                    <div class="col-md-12 text-center">
                        {!! $vehicles->appends(Request::except('page'))->links() !!}
                    </div>
                </div>
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