@extends('layouts.admin')

@section('title','Productwise Search')

@section('content')
    <section role="main" class="content-body">
        <div class="panel panel-body">
            {!! Form::open(['action'=>'InvoiceController@purchaseHistory','method'=>'get','class'=>'form-inline']) !!}
            <div class="form-group col-md-12 {{$errors->has('product_id')?'has-error':''}}">
                {{ Form::label('product_id', 'Select Product', array('class'=>'control-label col-md-2')) }}
                <div class="col-md-4">
                    {{ Form::select('product_id',$repository->products(),null,['class'=>'form-control populate','data-plugin-selectTwo','placeholder'=>'Select Vehicle Number']) }}
                    @if($errors->has('product_id'))
                        <span class="help-block"><strong>{{$errors->first('product_id')}}</strong></span>
                    @endif
                </div>
                {!! Form::submit('GO',['class'=>'form-control btn btn-success']) !!}
            </div>
            {{--<a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>--}}
            {!! Form::close() !!}
        </div>

        <!-- Search Panel -->
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
        <!-- /Search Panel -->

        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">Productwise Search</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Supplier</th>
                                    <th class="text-center">Voucher</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Brand</th>
                                    <th class="text-center">Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($purchases as $purchase)
                                    <tr>
                                        <td class="text-center">{{$num++}}</td>
                                        <td class="text-center">{{$purchase->invoice->date}}</td>
                                        <td>{{$purchase->invoice->supplier->supplier_name}}</td>
                                        <td class="text-center">{{$purchase->invoice->voucher}}</td>
                                        <td class="text-center">{{$purchase->product->name}}</td>
                                        <td class="text-center">{{$purchase->product->brand->name}}</td>
                                        <td class="text-center">{{$purchase->rate}}</td>
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
@endsection
