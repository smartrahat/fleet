@extends('layouts.admin')

@section('title','Purchases')

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
                    <li><span>Purchase</span></li>
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
                        <h2 class="panel-title">List of Purchased Item</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="col-md-2">
                                <a href="{{ action('InvoiceController@create') }}" role="button" class="btn btn-success">New Purchase</a>
                            </div>
                            <br />
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Product name</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Brand</th>
                                    <th class="text-center">Rate</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Actions</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                @foreach($invoice as $invoices)
                                    <tr>
                                        <td>{{ $invoices->id}}</td>
                                        <td>{{ $invoices->product->name}}</td>
                                        <td>{{ $invoices->product->category->name}}</td>
                                        <td>{{ $invoices->product->brand->name}}</td>
                                        <td class="text-right">{{ number_format($invoices->rate)}}/-</td>
                                        <td class="text-center">{{ $invoices->quantity}}</td>
                                        <td class="text-right">{{ number_format($invoices->p_total)}}/-</td>
                                        <td class="text-center">
                                            {{ Form::open(['action'=>['PurchaseController@destroy',$invoices->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('PurchaseController@edit',$invoices->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="6" class="text-right"><b>Total</b></td>
                                    <td class="text-right"><b>{{number_format($total)}}/-</b></td>
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
@endsection
@section('script')
    <script>
        function confirmDelete(){
            var x = confirm('Are you sure you want to delete this record?');
            return !!x;
        }
    </script>
@endsection
