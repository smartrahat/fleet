@extends('layouts.admin')
@section('content')
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Dashboard</h2>
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
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">List of Trips</h2>
                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Program ID</th>
                                        <th>Loading</th>
                                        <th>Unloading</th>
                                        <th>Product Details</th>
                                        <th>Empty Container</th>
                                        <th>Weight</th>
                                        <th>Fuel Quantity (Ltr)</th>
                                        <th>Fuel Cost</th>
                                        <th>Rent</th>
                                        <th>Driver Advance</th>
                                        <th>Driver Salary</th>
                                        <th>Helper Salary</th>
                                        <th>Driver Allowance</th>
                                        <th>Helper Allowance</th>
                                        <th>Labour Load Unload</th>
                                        <th>Toll</th>
                                        <th>Bridge</th>
                                        <th>Scale</th>
                                        <th>Wheel Maintenance</th>
                                        <th>Guard/Bazar Donation</th>
                                        <th>Container Charge</th>
                                        <th>Post Gate Charge</th>
                                        <th>Driver Cost</th>
                                        <th>Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($trips as $trip)
                                <tr>
                                    <td>{{$trip->id}}</td>
                                    <td>{{$trip->date}}</td>
                                    <td>{{$trip->program_id}}</td>
                                    <td>{{$trip->loading}}</td>
                                    <td>{{$trip->unloading}}</td>
                                    <td>{{$trip->product}}</td>
                                    <td>{{$trip->emp_container}}</td>
                                    <td>{{$trip->weight}}</td>
                                    <td>{{$trip->fuel}}</td>
                                    <td>{{$trip->fuel_cost}}</td>
                                    <td>{{$trip->rent}}</td>
                                    <td>{{$trip->driver_adv}}</td>
                                    <td>{{$trip->driver_salary}}</td>
                                    <td>{{$trip->helper_salary}}</td>
                                    <td>{{$trip->driver_allow}}</td>
                                    <td>{{$trip->helper_allow}}</td>
                                    <td>{{$trip->labour}}</td>
                                    <td>{{$trip->toll}}</td>
                                    <td>{{$trip->bridge}}</td>
                                    <td>{{$trip->scale}}</td>
                                    <td>{{$trip->wheel}}</td>
                                    <td>{{$trip->donation}}</td>
                                    <td>{{$trip->container}}</td>
                                    <td>{{$trip->port_gate}}</td>
                                    <td>{{$trip->driver_cost}}</td>
                                    <td>
                                        {{ Form::open(['action'=>['TripController@destroy',$trip->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                        <a href="{{ action('TripController@edit',$trip->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
@endsection
@section('script')
<script>
function confirmDelete(){
    var x = confirm('Are you sure you want to delete this record?');
    return !!x;
}
</script>
@stop
