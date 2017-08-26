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
                            <h2 class="panel-title">Trip Information Form</h2>
                        </header>

                        <div class="panel-body">
                            {{ Form::model($trip,['action' => ['TripController@update',$trip->id],'method'=>'patch','class'=>'form-horizontal']) }}
                            @include('trip.form',['submitButtonText'=>'Update'])
                            {{ Form::close() }}

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
    <!-- end: page -->
@endsection