@extends('layouts.admin')

@section('title','Vehicle List')

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
                            <h2 class="panel-title">List of Owners</h2>
                        </header>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-condensed mb-none">
                                    <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <th>Address</th>
                                    <th>National ID No</th>
                                    <th>E-mail</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($owners as $owner)
                                <tr>
                                    <td>{{$owner->id}}</td>
                                    <td>{{$owner->name}}</td>
                                    <td>{{$owner->f_name}}</td>
                                    <td>{{$owner->address}}</td>
                                    <td>{{$owner->nid_no}}</td>
                                    <td>{{$owner->email}}</td>
                                    <td>{{$owner->mobile_no}}</td>
                                    <td>
                                        {{ Form::open(['action'=>['OwnerController@destroy',$owner->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                        <a href="{{ action('OwnerController@edit',$owner->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
