@extends('layouts.admin')

@section('title','Suppliers')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Vehicle Owners</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Owners</span></li>
                </ol>
                <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">List of Suppliers</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <a href="{{ action('SupplierController@create') }}" role="button" class="btn btn-success">Add Supplier</a><br />
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Supplier Name</th>
                                    <th>Contact Person Name</th>
                                    <th>Address</th>
                                    <th>Mobile No</th>
                                    <th>E-mail</th>
                                    <th>Action</th>
                                </tr>
                                    </thead>
                                    <tbody>
                                @foreach($suppliers as $supplier)
                                    <tr>
                                        <td>{{$supplier->id}}</td>
                                        <td>{{$supplier->supplier_name}}</td>
                                        <td>{{$supplier->name}}</td>
                                        <td>{{$supplier->address}}</td>
                                        <td>{{$supplier->mobile}}</td>
                                        <td>{{$supplier->email}}</td>
                                        <td>
                                            {{ Form::open(['action'=>['SupplierController@destroy',$supplier->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('SupplierController@edit',$supplier->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
@endsection
@section('script')
    <script>
        function confirmDelete(){
            var x = confirm('Are you sure you want to delete this record?');
            return !!x;
        }
    </script>
@stop
