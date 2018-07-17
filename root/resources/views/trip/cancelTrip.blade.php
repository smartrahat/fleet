@extends('layouts.admin')

@section('title','Edit Trip Cancel')

@section('content')
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Edit Party</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a>
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Cancel Trip</span></li>
                    </ol>
                    <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
                </div>
            </header>
            <!-- start: page -->
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">Cancel Trip</h2>
                        </header>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    {{--<tr>--}}
                                        {{--<th>ID</th>--}}
                                        {{--<td>{{$trips->id}}</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <th>Program Serial</th>
                                        <td>{{$trips->program->serial}}</td>
                                    </tr>
                                    <tr>
                                        <th>Driver Name</th>
                                        <td>{{$trips->driver->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Vehicle Number</th>
                                        <td>{{$trips->vehicle->vehicleNo}}</td>
                                    </tr>
                                    <tr>
                                        <th>Driver Advance (Tk)</th>
                                        <td>{{$trips->driver_adv}}</td>
                                    </tr>
                                    <tr>
                                        <th>Driver Fixed Advance (Tk)</th>
                                        <td>{{$trips->d_a_fix}}</td>
                                    </tr>
                                    <tr>
                                        <th>Driver Extra Advance (Tk)</th>
                                        <td>{{$trips->extra_adv}}</td>
                                    </tr>
                                    <tr>
                                        <th>Loading</th>
                                        <td>{{$trips->loading}}</td>
                                    </tr>
                                    <tr>
                                        <th>Unloading</th>
                                        <td>{{$trips->unloading}}</td>
                                    </tr>
                                    <tr>
                                        <th>Reason for Cancelling Trip</th>
                                        <td>
                                            {{ Form::model($trips,['action'=>['TripController@update',$trips->id],'method'=>'patch','class'=>'form-horizontal','files'=>true])}}
                                            {{ Form::text('trip_cancel',null, ['class' => 'form-control col-md-12']) }}
                                            <input type="hidden" name="vehicle_id" value="{{$trips->vehicle->id}}" />
                                            <input type="hidden" name="trip_status" value="{{$trips->trip_status}}" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <br>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-3">
                                    {{ Form::submit('Cancel Trip',['class'=>'form-control btn btn-success']) }}
                                </div>
                                <div class="col-md-2">
                                    {{ Form::reset('RESET',['class'=>'form-control btn btn-warning']) }}
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ URL::previous() }}" role="button" class="form-control btn btn-danger">Back</a>
                                </div>
                            </div>
                            <!-- ends-->
                            {{ Form::close() }}
                        </div>
                    </section>
                </div>
            </div>
        </section>

    <!-- end: page -->
@endsection