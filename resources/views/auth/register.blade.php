@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="animated bounceInLeft col-lg-4 text-center">
            <div class="text-block font-weight-light">Welcome to our new website<i class="far fa-smile ml-1"></i></div>
            <a title="dates_ghaban_home_page" href="{{ secure_url('/') }}">
                <img width="100px" src="{{ secure_asset('frontend/images/Logo_black.png') }}" alt="dates_Ghaban_dashboard">
            </a>
            <h1 class="display-4 text-uppercase font-weight-bold">Sign-up</h1>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <form class="animated bounceInLeft" method="POST" action="{{ secure_url('/register') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input placeholder="your name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block text-lowercase text-small text-danger">
                                        <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('name') }}</small></strong>
                                    </span>
                                @endif

                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input placeholder="your email" id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block text-lowercase text-small text-danger">
                                        <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('email') }}</small></strong>
                                    </span>
                                @endif

                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input placeholder="your password" id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block text-lowercase text-small text-danger">
                                        <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('password') }}</small></strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">

                            <input placeholder="confirm your password" id="password-confirm" type="password" class="form-control" name="password_confirmation">

                        </div>

                        <div class="form-group">

                        <button type="submit" class="btn btn-info font-weight-light text-uppercase">
                            <i class="fas fa-user-plus mr-1"></i>Register
                        </button>

                        <a class="ml-3 text-lowercase font-weight-light" href="{{ url('/login') }}">you can also logged in ?</a>

                        </div>

                    </form>
        </div>
    </div>
</div>
@endsection
