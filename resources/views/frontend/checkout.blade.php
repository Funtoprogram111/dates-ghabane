@extends('layouts.app')

@section('content')

  <div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
            <div class="animated bounceInLeft text-block font-weight-light">Welcome to our new checkout page<i class="far fa-smile ml-1"></i></div>
            <a title="dates_ghaban_home_page" href="{{ secure_url('/') }}">
                <img class="animated bounceInLeft" width="100px" src="{{ secure_asset('frontend/images/Logo_black.png') }}" alt="">
            </a>
            <h1 class="animated bounceInLeft  mr-3 display-4 text-uppercase font-weight-bold">shipping information</h1>
            <div class="animated bounceInLeft text-block font-weight-light">hi <mark class="font-weight-bold">{{ Auth::user()->name }}</mark>!, please complete all required shipping info<i class="far fa-smile ml-1"></i></div>
        </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-6 col-md-10 col-sm-8 col-xs-12">
        @if(Session::has("success"))

        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{!! Session::get('success') !!}</p>
        </div>

        @endif
        @if(Session::has("createOrder"))

        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{!! Session::get('createOrder') !!}</p>
        </div>

        @endif

        @if(Session::has("notification"))

        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{!! Session::get('notification') !!}</p>
        </div>

        @endif
        <form class="animated bounceInLeft" method="post" action="{{ secure_url('/address/create') }}">
        {{ csrf_field() }}



                 <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">

                        <small class="text-info font-weight-light">select your country !</small>
                        <select id="countries_phone1" name="country" class="form-control bfh-countries" data-country="US" data-flags="true"></select>

                        @if ($errors->has('country'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('country') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">

                        <small class="text-info font-weight-light">select your state !</small>
                        <select name="state" class="form-control bfh-states" data-country="countries_phone1" data-state="CA"></select>

                        @if ($errors->has('state'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('state') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">


                        <input value="{{ old('firstname') }}" placeholder="Your firstname" id="firstname" type="text" class="form-control" name="firstname">

                        @if ($errors->has('firstname'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('firstname') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                        <input value="{{ old('lastname') }}" placeholder="your lastname" id="lastname" class="form-control" name="lastname" type="text">

                        @if ($errors->has('lastname'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('lastname') }}</small></strong>
                            </span>
                        @endif

                </div>

                 <div class="form-group{{ $errors->has('PhoneNumber') ? ' has-error' : '' }}">

                        <small class="text-info font-weight-light">your phone number please !</small>
                        <input name="PhoneNumber" type="text" class="form-control bfh-phone" data-country="countries_phone1">

                        @if ($errors->has('PhoneNumber'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('PhoneNumber') }}</small></strong>
                            </span>
                        @endif

                </div>


                 <div class="pl-0 pr-0 form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">


                        <input value="{{ old('zipCode') }}" placeholder="your zip_code" id="zipCode" type="text" class="form-control" name="zipCode">

                        @if ($errors->has('zipCode'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('zipCode') }}</small></strong>
                            </span>
                        @endif

                </div>

                 <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">


                        <textarea rows="6" placeholder="Your address" id="address" type="text" class="form-control" name="address">
                          {{ old('address') }}
                        </textarea>

                        @if ($errors->has('address'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('address') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group">

                        <button type="submit" class="btn btn-info font-weight-light text-uppercase">
                            <i class="far fa-save mr-1"></i>save
                        </button>

                </div>

            </form>

      </div>

    </div>

</div>

@endsection
