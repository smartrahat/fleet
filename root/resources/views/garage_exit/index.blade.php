@extends('layouts.admin')

@section('title','Garage')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Garaged Vehicles</h2>
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
                        <h2 class="panel-title">List of Garaged Vehicles</h2>
                    </header>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Vehicle No</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($garageExits as $garageExit)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $garageExit->date }}</td>
                                        <td>{{ $garageExit->vehicle->vehicleNo }}</td>
                                        <td>{{ $garageExit->description }}</td>
                                        <td class="text-center">
                                            {{ Form::open(['action'=>['GarageExitController@destroy',$garageExit->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('GarageExitController@edit',$garageExit->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                    {{--<tr>--}}
                                        {{--<td colspan="4" class="text-right">Total Expense</td>--}}
                                        {{--<td class="text-right">{{$total}}/-</td>--}}
                                        {{--<td></td>--}}
                                    {{--</tr>--}}
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