@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="animated bounceInLeft col-lg-4 text-center">
            <div class="text-block font-weight-light">Welcome to our new website<i class="far fa-smile ml-1"></i></div>
            <a title="dates_ghaban_home_page" href="{{ secure_url('/') }}">
                <img width="100px" src="{{ secure_asset('frontend/images/Logo_black.png') }}" alt="dates_Ghaban_dashboard">
            </a>
            <h1 class="display-4 text-uppercase font-weight-bold">Reset Password</h1>
        </div>
    </div>

    <div class="row justify-content-center">
          <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">

            @if (session('status'))
              <div class="uk-alert-success" uk-alert>
                  <a class="uk-alert-close" uk-close></a>
                  <p>{{ session('status') }}</p>
              </div>
          @endif

            <form class="animated bounceInLeft" method="POST" action="{{ secure_url('/password/email') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail Address</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('email') }}</small></strong>
                            </span>
                        @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info font-weight-light text-uppercase">
                        <i class="far fa-paper-plane mr-1"></i>Send Password Reset Link
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
