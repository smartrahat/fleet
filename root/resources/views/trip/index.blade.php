@extends('layouts.admin')

@section('title','Trip List')

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

            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">List of Trips</h2>
                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <a href="{{ action('TripController@create') }}" role="button" class="btn btn-success">Add Trip</a><br />
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Program ID</th>
                                        <th>Party Name</th>
                                        <th>Loading</th>
                                        <th>Unloading</th>
                                        <th>Product Details</th>
                                        <th>Empty Container</th>
                                        <th>Weight</th>
                                        <th>Fuel Quantity (Ltr)</th>
                                        {{--<th>Fare</th>--}}
                                        <th>Driver Advance</th>
                                        <th>Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($trips as $trip)
                                <tr>
                                    <td>{{$trip->id}}</td>
                                    <td>{{$trip->program->serial}}</td>
                                    <td>{{ $trip->program->party->name }}</td>
                                    <td>{{$trip->loading}}</td>
                                    <td>{{$trip->unloading}}</td>
                                    <td>{{$trip->product}}</td>
                                    <td>{{$trip->emp_container}}</td>
                                    <td>{{$trip->weight}}</td>
                                    <td>{{$trip->fuel}}</td>
                                    {{--<td>{{$trip->rent}}</td>--}}
                                    <td class="text-right">{{ number_format($trip->driver_adv) }}/-</td>
                                    <td>
                                        {{ Form::open(['action'=>['TripController@destroy',$trip->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                        <a href="{{ action('TripController@edit',$trip->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
@endsection
@section('script')
<script>
function confirmDelete(){
    var x = confirm('Are you sure you want to delete this record?');
    return !!x;
}
</script>
@stop
