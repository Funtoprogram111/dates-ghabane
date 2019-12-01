@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="animated bounceInLeft col-lg-4 text-center">
            <div class="text-block font-weight-light">Welcome to our new website<i class="far fa-smile ml-1"></i></div>
            <a title="dates_ghaban_home_page" href="{{ secure_url('/') }}">
                <img width="100px" src="{{ secure_asset('frontend/images/Logo_black.png') }}" alt="dates_Ghaban_dashboard">
            </a>
            <h1 class="display-4 text-uppercase font-weight-bold">Sign-in</h1>
            <div class="animated bounceInLeft text-block font-weight-light">hi <mark class="font-weight-bold">custumer</mark>!, you can<a title="profile-custumer" class="ml-1 mr-1 text-lowercase font-weight-light" href="{{ secure_url('profiles/edit', Auth::user()->id) }}"> update </a> your profile info<i class="far fa-smile ml-1"></i></div>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
            <form class="animated bounceInLeft" method="POST" action="{{ secure_url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input placeholder="your email" id="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('email') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <input placeholder="Your password" id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('password') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group">

                        <div class="form-check pl-0">
                            <div class="custom-control custom-checkbox">
                                <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label custom-control-label" for="remember">
                                    Remember Me
                                </label>
                                <a class="ml-3 text-lowercase font-weight-light" href="{{ url('/password/reset') }}">Forgot Your Password ?</a>
                            </div>
                        </div>

                </div>

                <div class="form-group">

                        <button type="submit" class="btn btn-info font-weight-light text-uppercase">
                            <i class="fas fa-sign-in-alt mr-1"></i>Login
                        </button>

                        <a class="ml-3 text-lowercase font-weight-light" href="{{ url('/register') }}">create new account</a>

                </div>

            </form>
        </div>

    </div>

    </div>

</div>

@endsection
