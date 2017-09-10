@extends('layouts.admin')

@section('title','Rotation List')

@section('content')
    <section role="main" class="content-body">

        <header class="page-header">
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

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
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
                            <th>Vehicle Number</th>
                            <th>Destination</th>
                            <th>Driver Advance</th>
                            <th>SR Name</th>
                            <th>Party Name</th>
                            <th>Empty Container</th>
                            <th>Vehicle Mobile Number</th>
                            <th>Loading Point</th>
                            <th>Unloading Point</th>
                            <th>Product Details</th>
                            <th>Advance Rent</th>
                            <th>Due Rent</th>
                            <th>Total Rent</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trips as $trip)
                            <tr>
                                <td>{{ $trip->id }}</td>
                                <td>{{ $trip->program->vehicle->vehicleNo }}</td>
                                <td>{{ $trip->unloading }}</td>
                                <td>{{ $trip->driver_adv }}</td>
                                <td>{{ $trip->program->employee->name }}</td>
                                <td>{{ $trip->program->party->name }}</td>
                                <td>{{ $trip->emp_container }}</td>
                                <td>{{ $trip->program->driver->mobile }}</td>
                                <td>{{ $trip->loading }}</td>
                                <td>{{ $trip->unloading }}</td>
                                <td>{{ $trip->product }}</td>
                                <td>{{ $trip->program->adv_rent }}</td>
                                <td>{{ $trip->program->due_rent }}</td>
                                <td>{{ $trip->program->rent }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><br>
                <a href="#" role="button" class="btn btn-success">Print</a>
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