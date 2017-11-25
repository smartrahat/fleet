@extends('layouts.admin')
@section('title','Expense Categories')
@section('content')
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Expense Categories</h2>
                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a>
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Expense Categories</span></li>
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
                            <h2 class="panel-title">Update Expense Category</h2>
                        </header>

                        <div class="panel-body">
                            {{ Form::model($expenseCategory,['action'=>['ExpenseCategoryController@update',$expenseCategory->id],'method'=>'patch','class'=>'form-horizontal']) }}
                            <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                                {{ Form::label('name','Brand Name:',['class'=>'col-md-3 control-label']) }}
                                <div class="col-md-6">
                                    {{ Form::text('name',null,['class' => 'form-control']) }}
                                    @if($errors->has('name'))
                                        <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('description')? 'has-error':'' }}">
                                {{ Form::label('description','Description:',['class'=>'col-md-3 control-label']) }}
                                <div class="col-md-6">
                                    {{ Form::textarea('description',null,['class' => 'form-control']) }}
                                    @if($errors->has('description'))
                                        <span class="help-block"><strong>{{ $errors->first('description') }}</strong></span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-3">
                                    {{ Form::submit('Update',['class'=>'form-control btn btn-success']) }}
                                </div>
                                <div class="col-md-2">
                                    {{ Form::reset('Reset',['class'=>'form-control btn btn-warning']) }}
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

            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">Expense Categories</h2>
                        </header>
                        <div class="col-md-12">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                        </div>
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
                                    @foreach($expenseCategories as $expenseCategory)
                                        <tr>
                                            <td>{{ $expenseCategory->id }}</td>
                                            <td>{{ $expenseCategory->name }}</td>
                                            <td>{{ $expenseCategory->description }}</td>
                                            <td>
                                                {{ Form::open(['action'=>['ExpenseCategoryController@destroy',$expenseCategory->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                                <a href="{{ action('ExpenseCategoryController@edit',$expenseCategory->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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