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
                    <li><span>Invoice</span></li>
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
                        <h2 class="panel-title">List of Invoices</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <a href="{{ action('InvoiceController@create') }}" role="button" class="btn btn-success">New Purchase</a><br /><br />
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Supplier</th>
                                    <th class="text-center">Voucher</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Paid</th>
                                    <th class="text-center">Due</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($invoices as $invoice)
                                    <tr>
                                        <td>{{$invoice->id}}</td>
                                        <td>{{$invoice->date}}</td>
                                        <td>{{$invoice->supplier->supplier_name}}</td>
                                        <td class="text-center">{{ Html::linkAction('PurchaseController@show',$invoice->voucher,[$invoice->id]) }}</td>
                                        <td class="text-right">{{ $invoice->total or ''}}</td>
                                        <td class="text-right">{{$invoice->advance or ''}}</td>
                                        <td class="text-right">{{$invoice->due or ''}}</td>
                                        <td class="text-center">
                                            {{ Form::open(['action'=>['InvoiceController@destroy',$invoice->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                            <a href="{{ action('InvoiceController@edit',$invoice->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="4" class="text-right"><b>Total</b></td>
                                        <td class="text-right"><b>{{$total}}</b></td>
                                        <td class="text-right"><b>{{$paid}}</b></td>
                                        <td class="text-right"><b>{{$due}}</b></td>
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
