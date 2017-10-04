@extends('layouts.admin')

@section('title','Due Collection')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Programs</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Programs</span></li>
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
                        <h2 class="panel-title">Due Collection Form</h2>
                    </header>

                    <div class="panel-body">
                        {{ Form::open(['action' => 'ProgramController@store','method'=>'post','class'=>'form-horizontal']) }}


                        <!--Date starts-->
                        <div class="form-group {{$errors->has('date')?'has-error':''}}">
                            <label class="col-md-3 control-label">Program Date:</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                    {{ Form::text('date', null, array('class' => 'form-control','data-plugin-datepicker data-date-format="yyyy-mm-dd"' )) }}
                                </div>
                                @if($errors->has('date'))
                                    <span class="help-block"><strong>{{$errors->first('date')}}</strong></span>
                                @endif
                            </div>
                        </div>

                        <!--Date ends-->



                        @include('program.form',['submitButtonText'=>'Save'])
                        {{ Form::close() }}
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- end: page -->

@stop
