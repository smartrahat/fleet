@extends('layouts.app')

@section('title','Reset Password')

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

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg">
                            <label>E-Mail Address</label>

                            <div class="input-group input-group-icon">
                                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ $email or old('email') }}" required autofocus>
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-lg">
                            <div class="clear-fix">
                                <label class="pull-left">Password</label>
                            </div>

                            <div class="input-group input-group-icon">
                                <input id="password" type="password" class="form-control input-lg" name="password" required>
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} mb-lg">
                            <div class="clear-fix">
                                <label class="pull-left">Confirm Password</label>
                            </div>

                            <div class="input-group input-group-icon">
                                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation" required>
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" type="checkbox" name="remember">
                                    <label for="remember">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-md-5 text-right">
                                <button type="submit" class="btn btn-primary hidden-xs">Reset Password</button>
                                <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Reset Password</button>
                            </div>
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
