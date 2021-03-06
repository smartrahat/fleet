@extends('layouts.admin')

@section('title','Trip Cost')

@section('content')
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Trip Costs</h2>
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
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="javascript:window.print()"><i class="fa fa-print"></i></a>
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">Trip Cost Report</h2>

                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <a href="{{ action('TripCostController@create') }}" role="button" class="btn btn-success">Add Trip Cost</a><br />
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Program Serial</th>
                                        <th>Driver</th>
                                        <th>Vehicle</th>
                                        <th>Fuel Cost</th>
                                        <th>Driver Allow<br>ance</th>
                                        <th>Helper Allow<br>ance</th>
                                        <th>Labour<br>Load/<br>Unload</th>
                                        <th>Toll</th>
                                        <th>Bridge</th>
                                        <th>Scale</th>
                                        <th>Wheel</th>
                                        <th>Guard/<br>Bazar Donation</th>
                                        <th>Container Charge</th>
                                        <th>Port Gate Charge</th>
                                        <th>Other Expenses</th>
                                        <th>Total</th>
                                        <th>Driver Advance</th>
                                        <th>Driver Balance</th>
                                        <th>Action</th>
                                             </tr>
                                        </thead>
                        <tbody>
                            @foreach($tripCosts as $tripCost)
                                <tr>
                                    <td>{{$tripCost->id}}</td>
                                    <td>{{$tripCost->program->serial}}</td>
                                    <td>{{$tripCost->driver->name}}</td>
                                    <td>{{$tripCost->vehicle->vehicleNo}}</td>

                                    <td class="text-right">{{number_format($tripCost->fuel_cost)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->driver_allow)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->helper_allow)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->labour)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->toll)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->bridge)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->scale)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->wheel)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->donation)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->container)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->port_gate)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->other)}}/-</td>
                                    <td class="text-right">{{number_format($tripCost->total)}}/-</td>
                                    <td>
                                        @foreach($tripCost->program->trips->where('program_id',$tripCost->program->id)->where('driver_id',$tripCost->driver->id)->where('vehicle_id',$tripCost->vehicle->id) as $trip)
                                            {{$trip->d_a_fix+$trip->extra_adv}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($tripCost->program->trips->where('program_id',$tripCost->program->id)->where('driver_id',$tripCost->driver->id)->where('vehicle_id',$tripCost->vehicle->id) as $trip)
                                            {{$trip->d_a_fix+$trip->extra_adv-$tripCost->total}}
                                        @endforeach
                                    </td>
                                    <td>
                                        {{ Form::open(['action'=>['TripCostController@destroy',$tripCost->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                        <a href="{{ action('TripCostController@edit',$tripCost->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
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
