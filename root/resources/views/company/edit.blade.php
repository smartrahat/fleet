@extends('layouts.admin')

@section('title','Edit Company')

@section('content')

    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Edit Company</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Company</span></li>
                    <li><span>Edit Company</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open=""><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            {{--<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>--}}
                        </div>

                        <h2 class="panel-title">Company Details</h2>
                    </header>
                    <div class="panel-body">
                        {!! Form::model($company,['action'=>['CompanyController@update',$company->id],'method'=>'patch','class'=>'form-horizontal','files'=>true]) !!}
                        @include('company.form',['submitButtonText'=>'Update'])
                        {!! Form::close() !!}
                    </div>
                </section>
            </div>
        </div>
    </section>


@stop