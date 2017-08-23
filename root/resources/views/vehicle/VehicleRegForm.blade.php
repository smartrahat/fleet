@extends('layouts.admin')

@section('content')
    <div class="inner-wrapper">
        <section role="main" class="content-body">

        <!-- start: page -->
        <div class="row">
            <div class="col-xs-12">
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                        <h2 class="panel-title">Vehicle Information Form</h2>
                    </header>

                    <div class="panel-body">
                        {{ Form::open(array('action' => 'PageController@vehicleRegFormController')) }}
                            <!-- Vehicle Name Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Name', array('class'=>'col-md-3 control-lebel')) }}
                                {{--<label class="col-md-3 control-label">Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::text('vehicleName', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Vehicle name ends-->
                            <!-- brand Starts-->
                            <div class="form-group">
                                {{ Form::label('name', 'Brand Name', array('class'=>'col-md-3 control-lebel')) }}
                                {{--<label class="col-md-3 control-label">Brand Name</label>--}}
                                <div class="col-md-6">
                                    {{ Form::select('brandName',$repository->brandName(),null,['class'=>'form-control populate','data-plugin-selectTwo']) }}
                                </div>
                            </div>
                            <!-- brand ends-->
                            <!-- Type start-->
                        <div class="form-group">
                            {{ Form::label('name', 'Types', array('class'=>'col-md-3 control-lebel')) }}
                            {{--<label class="col-md-3 control-label">Brand Name</label>--}}
                            <div class="col-md-6">
                                {{ Form::select('types',$repository->brands(),null,['class'=>'form-control populate','data-plugin-selectTwo']) }}
                            </div>
                        </div>
                            <!-- Types ends-->
                            <!-- Owner start-->
                        <div class="form-group">
                            {{ Form::label('name', 'Owner Name', array('class'=>'col-md-3 control-lebel')) }}
                            {{--<label class="col-md-3 control-label">Brand Name</label>--}}
                            <div class="col-md-6">
                                {{ Form::select('owner',$repository->types(),null,['class'=>'form-control populate','data-plugin-selectTwo']) }}
                            </div>
                        </div>
                            <!-- Owner ends-->
                            <!--Road permit starts-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Road Permit</label>
                                <div class="col-md-6">
                                    <div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                        {{ Form::text('RoadPermitStart', '', array('class' => 'form-control')) }}
                                        {{--<input type="text" class="form-control" name="start">--}}
                                        <span class="input-group-addon">to</span>
                                        {{ Form::text('RoadPermitEnd', '', array('class' => 'form-control')) }}
                                        {{--<input type="text" class="form-control" name="end">--}}
                                    </div>
                                </div>
                            </div>
                            <!--Road permit ends-->

                            <!--Tax Token starts-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tax Token</label>
                                <div class="col-md-6">
                                    <div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                        {{ Form::text('TaxTokenStart', '', array('class' => 'form-control')) }}
                                        <span class="input-group-addon">to</span>
                                        {{ Form::text('TaxTokenEnd', '', array('class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <!--Road permit ends-->
                            <!--Road permit starts-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Insurance</label>
                                <div class="col-md-6">
                                    <div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                        {{ Form::text('InsuranceStart', '', array('class' => 'form-control')) }}
                                        <span class="input-group-addon">to</span>
                                        {{ Form::text('InsuranceEnd', '', array('class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <!--Road permit ends-->

                            <!--Fitness starts-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Fitness</label>
                                <div class="col-md-6">
                                    <div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                        {{ Form::text('FitnessStart', '', array('class' => 'form-control')) }}
                                        <span class="input-group-addon">to</span>
                                        {{ Form::text('FitnessEnd', '', array('class' => 'form-control')) }}
                                    </div>
                                </div>
                            </div>
                            <!--Fitness ends-->

                            <!--Registration Certificate starts-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Registration Certification</label>
                                <div class="col-md-6">
                                    <div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                        {{ Form::text('RegCertStart', '', array('class' => 'form-control')) }}
                                        <span class="input-group-addon">to</span>
                                        {{ Form::text('RegCertEnd', '', array('class' => 'form-control')) }}                                    </div>
                                </div>
                            </div>
                            <!--Registration Certificate ends-->

                            <!-- Vehicle Number Starts-->
                            <div class="form-group">

                                <label class="col-md-3 control-label">Vehicle Number</label>
                                <div class="col-md-6">
                                    {{ Form::text('vehicleNumber', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Vehicle number ends-->

                            <!-- Engine Number Starts-->
                            <div class="form-group">

                                <label class="col-md-3 control-label">Engine Number</label>
                                <div class="col-md-6">
                                    {{ Form::text('EngineNumber', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Engine Number ends-->

                            <!-- Chesis Number Starts-->
                            <div class="form-group">

                                <label class="col-md-3 control-label">Chases Number</label>
                                <div class="col-md-6">
                                    {{ Form::text('ChasesNumber', '', array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <!-- Chesis Number ends-->

                            <!-- Status Starts-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-6">
                                    <select  class="form-control">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Status ends-->
                            <!--Submit button -->
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-3">
                                    <input type="submit" value="Save"  class="form-control btn btn-success">
                                </div>
                                <div class="col-md-2">
                                    <input type="Button" value="Reset"  class="form-control btn btn-warning">
                                </div>
                                <div class="col-md-2">
                                    <input type="Button" value="Cencel"  class="form-control btn btn-danger">
                                </div>
                            </div>
                            <!-- ends-->

                            {{ Form::close() }}
                    </div>
                </section>
            </div>
        </div>
        </section>
            </div>
        </div>
        <!-- end: page -->
    </section>
    </div>
