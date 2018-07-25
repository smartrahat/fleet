@extends('layouts.admin')

@section('title','Products')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Add Products</h2>
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
                    <div class="panel panel-body no-print">
                        {!! Form::open(['action'=>'ExpenseController@index','method'=>'get','class'=>'form-inline']) !!}
                        <div class="form-group {{$errors->has('from','to')? 'has-error':''}}">
                            <div class="col-md-12">
                                <div class="input-daterange input-group" data-plugin-datepicker data-date-format='yyyy-mm-dd' data-date-format='yyyy-mm-dd'>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                                    {{ Form::text('from', null, array('class' => 'form-control')) }}
                                    <span class="input-group-addon">to</span>
                                    {{ Form::text('to', null, array('class' => 'form-control')) }}
                                </div>
                                @if($errors->has('from'))
                                    <span class="help-block"><strong>{{$errors->first('from')}}</strong></span><br>
                                @endif
                                @if($errors->has('to'))
                                    <span class="help-block"><strong>{{$errors->first('to')}}</strong></span>
                                @endif

                            </div>
                        </div>
                        {!! Form::submit('GO',['class'=>'btn btn-success']) !!}
                        <a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>
                        {!! Form::close() !!}
                    </div>
                    <!-- /Search Panel -->

                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">List of Expenses</h2>
                    </header>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expenses as $expense)
                                    <tr>
                                        <td>{{ $expense->id }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->expenseCategory->name }}</td>
                                        <td>{{ $expense->description }}</td>
                                        <td class="text-right">{{ $expense->amount }}/-</td>
                                        <td class="text-center">
                                            {{ Form::open(['action'=>['ExpenseController@destroy',$expense->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('ExpenseController@edit',$expense->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="4" class="text-right">Total Expense</td>
                                        <td class="text-right">{{$total}}/-</td>
                                        <td></td>
                                    </tr>
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