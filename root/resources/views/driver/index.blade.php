@extends('layouts.admin')

@section('title','Drivers')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Drivers</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Drivers</span></li>
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
                            <h2 class="panel-title">List of Drivers</h2>
                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    '
                                        <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Mother's Name</th>
                                        <th>Present Address</th>
                                        <th>Permanent Address</th>
                                        <th>National ID No</th>
                                        <th>Driving Licence No</th>
                                        <th>Photo</th>
                                        <th>Contact No</th>
                                        <th>Reference Person</th>
                                        <th>Appointment Person</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($drivers as $driver)
                                        <tr>
                                            <td>{{$driver->id}}</td>
                                            <td>{{$driver->name}}</td>
                                            <td>{{$driver->f_name}}</td>
                                            <td>{{$driver->m_name}}</td>
                                            <td>{{$driver->pre_address}}</td>
                                            <td>{{$driver->perm_address}}</td>
                                            <td>{{$driver->nid}}</td>
                                            <td>{{$driver->d_licence}}</td>
                                            <td><img src='{{asset("images/drivers/".$driver->image) }}' height="100" ></td>
                                            <td>{{$driver->mobile}}</td>
                                            <td>{{$driver->ref_name}}</td>
                                            <td>{{$driver->app_person}}</td>
                                            <td>
                                                {{ Form::open(['action'=>['DriverController@destroy',$driver->id],'method'=>'delete', 'onsubmit'=>'return confirmDelete()']) }}
                                                <a href="{{ action('DriverController@edit',$driver->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">List of Drivers</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                    <th>
                                        Father's Name <br/>
                                        Mother's Name
                                    </th>
                                    <th>Address</th>
                                    <th>National ID No</th>
                                    <th>E-mail</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                                                </tr>
                                    </thead>
                                    <tbody>
                                @foreach($drivers as $driver)
                                    <tr>
                                        <td>{{$driver->id}}</td>
                                        <td>{{$driver->name}}</td>
                                        <td>
                                            {{$driver->f_name}}<br/>
                                            {{$driver->m_name}}
                                        </td>
                                        <td>{{$driver->pre_address}}</td>
                                        <td>{{$driver->nid_no}}</td>
                                        <td>{{$driver->email}}</td>
                                        <td>{{$driver->mobile_no}}</td>
                                        <td>
                                            {{ Form::open(['action'=>['DriverController@destroy',$driver->id],'method'=>'delete', 'onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('DriverController@edit',$driver->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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