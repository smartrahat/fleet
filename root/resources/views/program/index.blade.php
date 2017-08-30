@extends('layouts.admin')

@section('title','Program List')

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

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    {{--<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>--}}
                </div>

                <h2 class="panel-title">Program Information</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Vehicle Name</th>
                            <th>Driver Name</th>
                            <th>Party Name</th>
                            <th>SR Name</th>
                            <th>Serial Number</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($programs as $program)
                        <tr>
                            <td>{{ $program->id }}</td>
                            <td>{{ $program->date }}</td>
                            <td>{{ $program->vehicle->vehicleNo }}</td>
                            <td>{{ $program->driver->name }}</td>
                            <td>{{ $program->party->name }}</td>
                            <td>{{ $program->employee->name }}</td>
                            <td>{{ $program->serial }}</td>
                            <td>
                                {{ Form::open(['action'=>['ProgramController@destroy',$program->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                <a href="{{ action('ProgramController@edit',$program->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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