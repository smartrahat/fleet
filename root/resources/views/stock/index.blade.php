@extends('layouts.admin')

@section('title','Stock List')

@section('content')
    <section role="main" class="content-body">

        <header class="page-header">
            <h2>Stock List</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Stock List</span></li>
                </ol>
                <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>

                <h2 class="panel-title">Stock List</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th class="text-center">Serial No.</th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stocks as $stock)
                        <tr class="text-center">
                            <td>{{ $stock->id }}</td>
                            <td>{{ $stock->product->name}}</td>
                            <td>{{ $stock->quantity or 0 }}</td>
                            <td>
                                {{ Form::open(['action'=>['StockController@destroy',$stock->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                <a href="{{ action('StockController@edit',$stock->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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