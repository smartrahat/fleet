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
                            <th>Name</th>
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
                            <td>{{ $vehicle->name }}</td>
                            <td>
                                {{ $vehicle->brand->name or '' }}
                                {{ $vehicle->type->name or '' }}
                            </td>
                            <td>{{ $vehicle->Owner->name or '' }}</td>
                            <td>
                                {{ $vehicle->roadPermitStart }}
                                {{ $vehicle->roadPermitEnd }}
                            </td>
                            <td>
                                {{ $vehicle->taxTokenStart }}
                                {{ $vehicle->taxTokenEnd }}
                            </td>
                            <td>
                                {{ $vehicle->insuranceStart }}
                                {{ $vehicle->insuranceEnd }}
                            </td>
                            <td>
                                {{ $vehicle->fitnessStart }}
                                {{ $vehicle->fitnessEnd }}
                            </td>
                            <td>
                                {{ $vehicle->regCertStart }}
                                {{ $vehicle->regCertEnd }}
                            </td>
                            <td>
                                {{ $vehicle->vehicleNo }}
                                {{ $vehicle->engineNo }}
                                {{ $vehicle->chasesNo }}
                            </td>
                            <td>
                                {{ $vehicle->mobile}}
                            </td>
                            <td>
                                {{ $vehicle->status->name or '' }}
                            </td>
                            <td>
                                <img src='{{asset("images/vehicles/".$vehicle->image) }}' height="100" >
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