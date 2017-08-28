@extends('layouts.admin')

@section('title','Add Employee')

@section('content')
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Add Employee</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a>
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Add Employee</span></li>
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
                            <h2 class="panel-title">Employee Information Form</h2>
                        </header>

                        <div class="panel-body">
                            {{ Form::open(array('action' => 'EmployeeController@store','method'=>'post')) }}
                            <!-- Owner Name Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Name', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('name', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Owner name ends-->

                            <!-- Owner Father's Name Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Father\'s Name', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('f_name', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Owner Father's name ends-->

                            <!-- Address Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Address', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('address', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Address ends-->

                            <!-- NID Number Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'National ID No', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('nid_no', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- NID Number ends-->

                            <!-- Email Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'E-mail', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('email', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Email ends-->

                            <!-- Owner Name Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Contact Number', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('mobile_no', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Owner name ends-->


                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-3">
                                    <input type="submit" value="Save"  class="form-control btn btn-success">
                                </div>
                                <div class="col-md-2">
                                    <input type="reset" value="Reset"  class="form-control btn btn-warning">
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
    </div>
    <!-- end: page -->
@endsection