@extends('layouts.admin')
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
            <!-- start: page -->
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">Type of Vehicle</h2>
                        </header>

                        <div class="panel-body">
                            {{ Form::model($type,['action'=>['TypeController@update',$type->id],'method'=>'patch','class'=>'form-horizontal']) }}
                            <div class="form-group">
                                {{ Form::label('name','Type Name:',['class'=>'col-md-3 control-label']) }}
                                <div class="col-md-6">
                                    {{ Form::text('name',null,['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('description','Description:',['class'=>'col-md-3 control-label']) }}
                                <div class="col-md-6">
                                    {{ Form::textarea('description',null,['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-3">
                                    {{ Form::submit('Update',['class'=>'form-control btn btn-success']) }}
                                </div>
                                <div class="col-md-2">
                                    {{--<input type="reset" value="Reset"  class="form-control btn btn-warning">--}}
                                    {{ Form::reset('Reset',['class'=>'form-control btn btn-warning']) }}
                                </div>
                                <div class="col-md-2">
                                    {{--<input type="Button" value="Cancel"  class="form-control btn btn-danger">--}}
                                    <a href="{{ URL::previous() }}" role="button" class="form-control btn btn-danger">Back</a>
                                </div>
                            </div>
                            <!-- ends-->
                            {{ Form::close() }}
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">Status of Vehicle</h2>
                        </header>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($types as $type)
                                        <tr>
                                            <td>{{ $type->id }}</td>
                                            <td>{{ $type->type }}</td>
                                            <td>{{ $type->description }}</td>
                                            <td>
                                                {{ Form::open(['action'=>['TypeController@destroy',$type->id],'method'=>'delete']) }}
                                                <a href="{{ action('TypeController@edit',$type->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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