@extends('layouts.admin')

@section('title','Datewise Program Report')
@section('style')
    <style>
    .only-print{
    display:none;
    }
    @media print{
    a.hiddenTab {
    display:none;
    }
    .only-print{
    display:block;
    }
    }
    </style>
@stop
@section('content')
    <section role="main" class="content-body">

        <header class="page-header no-print">
            <h2>Datewise Program Report</h2>
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

        <!-- Search Panel -->
        <div class="panel panel-body no-print">
            {!! Form::open(['action'=>'ProgramController@dailyIncomeReport','method'=>'get','class'=>'form-inline']) !!}
            <div class="form-group {{$errors->has('from','to')? 'has-error':''}}">
                <div class="col-md-12">
                    <div class="input-daterange input-group" data-plugin-datepicker data-date-format='yyyy-mm-dd' data-date-format='yyyy-mm-dd'>
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        {{ Form::text('from', null, array('class' => 'form-control')) }}
                        <span class="input-group-addon">to</span>
                        {{ Form::text('to', null, array('class' => 'form-control')) }}
                    </div>
                    @if($errors->has('from'))
                        <span class="help-block"><strong>{{$errors->first('from')}}</strong></span><br>
                    @endif
                    @if($errors->has('to'))
                        <span class="help-block"><strong>{{$errors->first('to')}}</strong></span>
                    @endif

                </div>
            </div>
                {!! Form::submit('GO',['class'=>'btn btn-success']) !!}
                <a href="javascript:window.print()" class="btn btn-success" role="button"><i class="fa fa-print"></i></a>
            {!! Form::close() !!}
        </div>
        <!-- /Search Panel -->

        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="javascript:window.print()"><i class="fa fa-print"></i></a>
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">Datewise Program Report</h2>
            </header>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Party</th>
                            <th>Program ID</th>
                            <th>Loading Point</th>
                            <th>Unloading Point</th>
                            <th>Empty Container</th>
                            <th>Total Trip</th>
                            <th>Weight</th>
                            <th>Rate</th>
                            <th>Taka</th>
                            {{--<th>Old Collection</th>--}}
                            <th>Advance</th>
                            <th>Due</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($incomes as $income)
                                <tr>
{{--                                    @if($income->date >= $fromDate && $income->date <= $toDate)--}}
                                        <td>{{ $i++}}</td>
                                        <td>{{ $income->date->format('Y-m-d')}}</td>
                                        <td>{{ $income->party->name or '' }}</td>
                                        <td>
                                            <a href="{{url('program/show',$income->program->id)}}" class="hiddenTab"> {{$income->program->serial}}</a>
                                            <a href="#" class="only-print"> {{$income->program->serial}}</a>
                                        </td>
                                        <td> @foreach($income->program->trips as $trip)
                                                    {{$trip->loading or '' }}
                                                @break
                                            @endforeach
                                        </td>
                                        <td>@foreach($income->program->trips as $trip)
                                                {{$trip->unloading or '' }}
                                                @break
                                            @endforeach</td>
                                        <td>@foreach($income->program->trips as $trip)
                                                {{$trip->emp_container or '' }}
                                                @break
                                            @endforeach</td>
                                        <td>{{$income->program->trips->count()}}</td>
                                        <td>{{ $income->program->weight or '' }}</td>
                                        <td>{{ $income->program->rate or '' }}</td>
                                        <td class="text-right">{{ number_format($income->rent) }}/-</td>
                                        {{--<td class="text-right">/-</td>--}}
                                        <td class="text-right">{{ number_format($income->paid) }}/-</td>
                                        <td class="text-right">{{ number_format($income->due_rent) }}/-</td>
                                    {{--@endif--}}
                                </tr>
                            @endforeach
                                <tr>
                                    <td colspan="10" class="text-right"><b>Total</b></td>
                                    <td class="text-right"><b>{{ number_format($total) }}/-</b></td>
                                    <td class="text-right"><b>{{ number_format($paid) }}/-</b></td>
                                    <td class="text-right"><b>{{ number_format($due_rent) }}/-</b></td>
                                </tr>
                        </tbody>
                    </table>
                </div><br>
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