@extends('layouts.admin')

@section('title','Vehicle User Assignation')

@section('content')
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Vehicle User Assignation</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a>
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Vehicle User Assignation</span></li>
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
                            <h2 class="panel-title">Vehicle User Assign Form</h2>
                        </header>

                        <div class="panel-body">
                            {{ Form::model($vehicle = new \App\Vehicle,['action' => 'VehicleUserAssignController@store','method'=>'post','class'=>'form-horizontal','files'=>true]) }}
                            @include('vehicle_user_assign.form',['submitButtonText'=>'Save'])
                            {{ Form::close() }}
                        </div>
                    </section>
                </div>
            </div>
        </section>
    <!-- end: page -->

    @stop
