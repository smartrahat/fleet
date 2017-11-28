@extends('layouts.admin')

@section('title','Companies')

@section('content')

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Companies</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Companies</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open=""><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <section class="panel">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    {{--<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>--}}
                </div>
                <h2 class="panel-title">All Companies</h2>
            </header>
            <div class="panel-body">
                <table class="table table-no-more table-bordered table-striped mb-none">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th class="hidden-xs hidden-sm">Name</th>
                        <th class="text-right">Address</th>
                        <th class="text-right hidden-xs hidden-sm">City</th>
                        <th class="text-right">State</th>
                        <th class="text-right">Country</th>
                        <th class="text-right">Phone</th>
                        <th class="text-right hidden-xs hidden-sm">Action</th>
                        {{--<th class="text-right hidden-xs hidden-sm">Low</th>--}}
                        {{--<th class="text-right">Volume</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td data-title="ID">{{ $company->id }}</td>
                            <td data-title="Date">{{ $company->name }}</td>
                            <td data-title="Address" class="hidden-xs hidden-sm">{{ $company->address }}</td>
                            <td data-title="City Name" class="text-right">{{ $company->city->name }}</td>
                            <td data-title="Qty" class="text-right hidden-xs hidden-sm">{{ $company->state->name }}</td>
                            <td data-title="Price" class="text-right">{{ $company->country->name }}</td>
                            <td data-title="Total" class="text-right">{{ $company->phone }}</td>
                            <td data-title="Action" class="text-right hidden-xs hidden-sm">
                                {!! Form::open(['action'=>['CompanyController@destroy',$company->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) !!}
                                {!! Form::submit('X',['class'=>'btn btn-danger']) !!}
                                <a href="{{ action('CompanyController@edit',$company->id) }}" role="button" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                {!! Form::close() !!}
                            </td>
                            {{--<td data-title="Low" class="text-right hidden-xs hidden-sm">$1.38</td>--}}
                            {{--<td data-title="Volume" class="text-right">9,395</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </section>

@stop

@section('script')

    <script>
        function confirmDelete(){
            var x = confirm('Do you want to delete this company?');
            return !!x;
        }
    </script>

@stop