@extends('layouts.admin')
@section('content')
        <section role="main" class="content-body">
            <!-- start: page -->
            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            </div>
                            <h2 class="panel-title">Brands</h2>
                        </header>

                        <div class="col-md-12">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                        </div>

                        <div class="panel-body">
                            {{ Form::open(array('action' => 'BrandController@store','method'=>'post')) }}
                            <!-- Brand Name Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Brand Name', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Brand name ends-->
                            <!-- Brand Description Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Description', array('class'=>'col-md-3 control-label')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Brand name ends-->

                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-3">
                                    <input type="submit" value="Save"  class="form-control btn btn-success">
                                </div>
                                <div class="col-md-2">
                                    <input type="reset" value="Reset"  class="form-control btn btn-warning">
                                </div>
                                <div class="col-md-2">
                                    <input type="Button" value="Cancel"  class="form-control btn btn-danger">
                                </div>
                            </div>
                            <!-- ends-->
                            {{ Form::close() }}
                        </div>
                    </section>
                </div>
            </div>
        </section>
    <!-- end: page -->
@endsection