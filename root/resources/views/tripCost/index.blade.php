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
                                <table class="table table-bordered table-stripCosted table-condensed mb-none">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Program ID</th>
                                        <th>Driver Salary</th>
                                        <th>Helper Salary</th>
                                        <th>Fuel Cost</th>
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
                            @foreach($tripCosts as $tripCost)
                                <tr>
                                    <td>{{$tripCost->id}}</td>
                                    <td>{{$tripCost->date}}</td>
                                    <td>{{$tripCost->program_id}}</td>
                                    <td>{{$tripCost->driver_salary}}</td>
                                    <td>{{$tripCost->helper_salary}}</td>
                                    <td>{{$tripCost->fuel_cost}}</td>
                                    <td>{{$tripCost->driver_allow}}</td>
                                    <td>{{$tripCost->helper_allow}}</td>
                                    <td>{{$tripCost->labour}}</td>
                                    <td>{{$tripCost->toll}}</td>
                                    <td>{{$tripCost->bridge}}</td>
                                    <td>{{$tripCost->scale}}</td>
                                    <td>{{$tripCost->wheel}}</td>
                                    <td>{{$tripCost->donation}}</td>
                                    <td>{{$tripCost->container}}</td>
                                    <td>{{$tripCost->port_gate}}</td>
                                    <td>{{$tripCost->driver_cost}}</td>
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
@endsection
@section('script')
<script>
function confirmDelete(){
    var x = confirm('Are you sure you want to delete this record?');
    return !!x;
}
</script>
@stop
