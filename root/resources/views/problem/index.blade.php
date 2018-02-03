@extends('layouts.admin')

@section('title','Problems')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Problems</h2>
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
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
            </div>
        </div>
        <!-- start: page -->
        <div class="row">
            <div class="col-md-12">
                <a href="{{ action('ProblemController@create') }}" role="button" class="btn btn-success">Add Problem</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">List of Problems</h2>
                    </header>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Vehicle Number</th>
                                    <th>Checked By</th>
                                    <th>Problem Category</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($problems as $problem)
                                    <tr>
                                        <td>{{ $problem->id }}</td>
                                        <td>{{ $problem->date }}</td>
                                        <td>{{ $problem->vehicle->vehicleNo or ''}}</td>
                                        <td>{{ $problem->employee->name }}</td>
                                        <td>{{ $problem->category->name }}</td>
                                        <td>{{ $problem->problem }}</td>
                                        <td>{{ $problem->problem_status ==1 ? 'Problem Not Solved':'Problem Solved' }}</td>
                                        <td>
                                            {{ Form::open(['action'=>['ProblemController@destroy',$problem->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('ProblemController@edit',$problem->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
    <!-- end: page -->
@endsection

@section('script')
    <script>
        function confirmDelete(){
            var x = confirm('Are you sure you want to delete this record?');
            return !!x;
        }
    </script>
@stop