@extends('layouts.admin')

@section('title','User List')

@section('content')
    <section role="main" class="content-body">

        <header class="page-header">
            <h2>Users</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Users</span></li>
                </ol>
                <a class="sidebar-right-toggle" ><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
        </div>
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>

                <h2 class="panel-title">User List</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <a href="{{ action('UserController@create') }}" role="button" class="btn btn-success">Add User</a><br /><br />
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Create at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    {{ Form::open(['action'=>['UserController@destroy',$user->id],'method'=>'delete','onsubmit'=>'return confirmDelete()']) }}
                                    <a href="{{ action('UserController@edit',$user->id) }}" role="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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