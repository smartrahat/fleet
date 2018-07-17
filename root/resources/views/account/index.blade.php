@extends('layouts.admin')

@section('title','Accounts')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>Accounts</h2>
            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a>
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Accounts</span></li>
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
                        <h2 class="panel-title">Accounts</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th class="text-center">Incomes</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Expenses</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                                    </thead>
                                    <tbody>
                                {{--@foreach($accounts as $account)--}}
                                <tr>
                                    <td>Programs</td>
                                    <td class="text-right">{{$program}}</td>
                                    <td>Trip Cost</td>
                                    <td class="text-right">{{$trip_cost}}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td>Purchases</td>
                                    <td class="text-right">{{$purchase}}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td>Repairing from outside</td>
                                    <td class="text-right">0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="text-right"></td>
                                    <td>Office Expenditure</td>
                                    <td class="text-right">{{$expenses}}</td>
                                </tr>
                                {{--@endforeach--}}
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </section>
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