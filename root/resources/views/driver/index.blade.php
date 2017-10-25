@extends('layouts.admin')

@section('title','Drivers')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header no-print">
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
                                <a href="{{ action('DriverController@create') }}" role="button" class="btn btn-success no-print">Add Driver</a><br />
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Father<br>Mother</th>
                                        <th>Permanent Address</th>
                                        <th>NID</th>
                                        <th>Driving Licence</th>
                                        <th>Phone</th>
                                        <th>Referenced<br>Appointed</th>
                                        <th>Photo</th>
                                        <th class="no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($drivers as $driver)
                                        <tr>
                                            <td>{{$driver->id}}</td>
                                            <td>{{$driver->name}}</td>
                                            <td>{{$driver->f_name}}<br>{{$driver->m_name}}</td>
                                            <td>{{$driver->perm_address}}</td>
                                            <td>{{$driver->nid}}</td>
                                            <td>{{$driver->d_licence}}</td>
                                            <td>{{$driver->mobile}}</td>
                                            <td>{{$driver->ref_name}}<br>{{$driver->app_person}}</td>
                                            <td>
                                                <img src='{{asset("images/drivers/") }}/{{ $driver->image != null ? $driver->image : 'dummy.jpg' }}' height="100" >
                                            </td>
                                            <td class="no-print">
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