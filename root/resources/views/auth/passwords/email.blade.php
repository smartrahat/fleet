@extends('layouts.app')

@section('title','Send Reset Link')

    <!-- Main Content -->
@section('content')

    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="{{ url('/') }}" class="logo pull-left">
                <img src="{{ asset('assets/images/logo.png') }}" height="54" alt="Web Point Ltd." />
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info">
                        <p class="m-none text-semibold h6">Enter your e-mail below and we will send you reset instructions!</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                        <div class="form-group mb-none">
                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input name="email" value="{{ old('email') }}" type="email" placeholder="E-mail" id="email" class="form-control input-lg" />
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-lg" type="submit">Reset!</button>
                                </span>

                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <p class="text-center mt-lg">Remembered? <a href="{{ url('/') }}">Sign In!</a>
                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. All Rights Reserved.</p>
        </div>
    </section>
    <!-- end: page -->

@endsection
