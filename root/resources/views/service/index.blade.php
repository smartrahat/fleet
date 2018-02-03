@extends('layouts.admin')

@section('title','Serviced Vehicles')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Serviced Vehicles</h2>
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
            <div class="col-xs-12">
                <section class="panel">


                    <!-- Search Panel -->
                    {{--<div class="panel panel-body no-print">--}}
                        {{--{!! Form::open(['action'=>'GarageEntriesController@search','method'=>'get','class'=>'form-inline']) !!}--}}
                        {{--<div class="form-group {{$errors->has('date')?'has-error':''}}">--}}
                            {{--<label class="control-label">Program Date: </label>--}}
                            {{--<div class="input-group">--}}
                {{--<span class="input-group-addon">--}}
                    {{--<i class="fa fa-calendar"></i>--}}
                {{--</span>--}}
                                {{--{{ Form::text('date', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"','placeholder'=>'YYYY-MM-DD' )) }}--}}
                            {{--</div>--}}
                            {{--@if($errors->has('date'))--}}
                                {{--<span class="help-block"><strong>{{$errors->first('date')}}</strong></span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                        {{--{!! Form::submit('GO',['class'=>'btn btn-success']) !!}--}}
                        {{--<a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>--}}
                        {{--{!! Form::close() !!}--}}
                    {{--</div>--}}
                    <!-- /Search Panel -->

                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">List of Serviced Vehicles</h2>
                    </header>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Vehicle No</th>
                                    <th>Solved Problem</th>
                                    <th>Parts Name</th>
                                    <th>Quantity</th>
                                    <th>Employee Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $service->date }}</td>
                                        <td>{{ $service->vehicle->vehicleNo }}</td>
                                        <td>{{ $service->problem->problem }}</td>
                                        <td>
                                            <ul>
                                                @foreach($service->products as $parts)
                                                    <li>{{ $parts->name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <td>
                                            <ul>
                                                @foreach($service->usedParts as $parts)
                                                    <li>{{ $parts->quantity}}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <td>
                                            <ul>
                                                @foreach($service->usedParts as $parts)
                                                    <li>{{ $parts->employee->name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="text-center">
                                            {{ Form::open(['action'=>['ServiceController@destroy',$service->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('ServiceController@edit',$service->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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