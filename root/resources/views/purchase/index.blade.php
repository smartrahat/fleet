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
                            <h2 class="panel-title">List of Purchases</h2>
                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <a href="{{ action('PurchaseController@create') }}" role="button" class="btn btn-success">New Purchase</a><br />
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Supplier</th>
                                    <th>Voucher</th>
                                    <th>Vehicle No</th>
                                    <th>Category</th>
                                    <th>Parts</th>
                                    <th>Brand</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Total</th>
                                    <th>Paid</th>
                                    <th>Due</th>
                                    <th>Actions</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($purchases as $purchase)
                                <tr>
                                    <td>{{$purchase->id}}</td>
                                    <td>{{$purchase->date}}</td>
                                    <td>{{$purchase->supplier->supplier_name}}</td>
                                    <td>{{$purchase->voucher}}</td>
                                    <td>{{$purchase->vehicle->vehicleNo}}</td>
                                    <td>{{$purchase->category->name}}</td>
                                    <td>{{$purchase->parts->name}}</td>
                                    <td>{{$purchase->brand->name}}</td>
                                    <td>{{$purchase->quantity}}</td>
                                    <td>{{$purchase->rate}}</td>
                                    <td>{{$purchase->total}}</td>
                                    <td>{{$purchase->advance}}</td>
                                    <td>{{$purchase->due}}</td>
                                  <td>
                                        {{ Form::open(['action'=>['PurchaseController@destroy',$purchase->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                        <a href="{{ action('PurchaseController@edit',$purchase->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        {{ Form::submit('X',['class'=>'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td colspan="10" class="text-right">Total</td>
                                    <td>{{$total}}</td>
                                    <td>{{$paid}}</td>
                                    <td>{{$due}}</td>
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
