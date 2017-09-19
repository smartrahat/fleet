@extends('layouts.admin')

@section('title','Accounting From Driver')

@section('content')
    <section role="main" class="content-body">

        <header class="page-header no-print">
            <h2>Program Report</h2>
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
                    <a href="javascript:window.print()"><i class="fa fa-print"></i></a>
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">Accounting From Driver</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Truck No</th>
                            <th>Driver Name</th>
                            <th>Loading Point</th>
                            <th>Unloading Point</th>
                            <th>Empty Container</th>
                            <th>Product<br>(Qty)</th>
                            <th>Fuel (Ltr)<br>Cost</th>
                            <th>Cont. Charge<br>Labour (load/<br>unload)</th>
                            <th>(Allowance)<br>Driver <br>Helper</th>
                            <th>Toll<br>Bridge<br>Scale</th>
                            <th>Wheel Main</th>
                            <th>Guard/<br>Dona<br>tion<br>Port Gate</th>
                            <th>Other</th>
                            <th>Total Cost</th>
                            <th>Driver Advance (Fixed)</th>
                            <th>Extra/less Advance (-)</th>
                            <th>Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tripCosts as $tripCost)
                            <tr>

                                <td>{{$tripCost->id }}</td>
                                <td>{{$tripCost->program->date}}</td>
                                <td>{{$tripCost->program->vehicle->vehicleNo}}</td>
                                <td>{{$tripCost->program->driver->name}}</td>
                                <td>{{$tripCost->program->trip->loading}}</td>
                                <td>{{$tripCost->program->trip->unloading}}</td>
                                <td>{{$tripCost->program->trip->emp_container}}</td>
                                <td>{{$tripCost->program->trip->product}}</td>
                                <td class="text-right">{{$tripCost->program->trip->fuel}}<br>
                                    {{number_format($tripCost->fuel_cost)}}/-</td>
                                <td class="text-right">{{number_format($tripCost->program->tripCost->container)}}/-<br>{{number_format($tripCost->labour) }}/-</td>
                                <td class="text-right">{{number_format($tripCost->driver_allow) }}/-<br>
                                    {{number_format($tripCost->helper_allow) }}/-</td>
                                <td class="text-right">{{number_format($tripCost->toll) }}/-<br>
                                    {{number_format($tripCost->bridge)}}/-<br>
                                    {{number_format($tripCost->scale)}}/-<br></td>
                                <td class="text-right">{{number_format($tripCost->wheel) }}/-</td>
                                <td class="text-right">{{number_format($tripCost->donation) }}/-<br>
                                    {{number_format($tripCost->port_gate) }}/-</td>
                                <td class="text-right">{{number_format($tripCost->other) }}/-</td>
                                <td class="text-right">{{number_format($tripCost->total) }}/-</td>
                                <td class="text-right">{{number_format($tripCost->program->trip->driver_adv)}}/-</td>
                                <td class="text-right">{{number_format($tripCost->program->trip->extra_adv)}}/-</td>
                                <td class="text-right">{{number_format($tripCost->program->trip->driver_adv+$tripCost->total-$tripCost->program->trip->extra_adv)}}/-</td>
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