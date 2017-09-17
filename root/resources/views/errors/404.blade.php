@extends('layouts.admin')

@section('title','Not Found')

@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <h2>404</h2>

            <div class="right-wrapper pull-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li><span>Errors</span></li>
                    <li><span>404</span></li>
                </ol>

                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="body-error error-inside">
            <div class="center-error">

                <div class="row">
                    <div class="col-md-8">
                        <div class="main-error mb-xlg">
                            <h2 class="error-code text-dark text-center text-semibold m-none">404 <i class="fa fa-file"></i></h2>
                            <p class="error-explanation text-center">{{ $exception->getMessage() }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text">Here are some useful links</h4>
                        <ul class="nav nav-list primary">
                            <li>
                                <a href="{{ url('/') }}"><i class="fa fa-caret-right text-dark"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ URL::previous() }}"><i class="fa fa-caret-right text-dark"></i> Go Back</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-caret-right text-dark"></i>
                                    Switch User
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: page -->
    </section>
@stop