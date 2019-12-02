@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="animated bounceInLeft col-lg-6 col-md-8 col-sm-12 col-xs-12 text-center">
            <div class="text-block font-weight-light">Welcome to our new website<i class="far fa-smile ml-1"></i></div>
            <a title="dates_ghaban_home_page" href="{{ secure_url('/') }}">
                <img class="uk-border-circle" width="100px" src="{{ secure_asset('/uploads/'.$user->avatar) }}" alt="user_profile">
            </a>
            <h1 class="display-4 text-uppercase font-weight-bold">Update profile</h1>
            <div class="animated bounceInLeft text-block font-weight-light">hi <mark class="font-weight-bold">{{ $user->name }}</mark></div>
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
            <form class="animated bounceInLeft" method="POST" action="{{ secure_url('/profile',$user->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input placeholder="your name" id="name" class="form-control" name="name" value="{{ $user->name }}">

                        @if ($errors->has('name'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('name') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <input placeholder="Your email" id="email" type="text" class="form-control" name="email" value="{{ $user->email }}">

                        @if ($errors->has('email'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('email') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="js-upload uk-placeholder uk-text-center" style="border:1px dashed #555;">
                    <span uk-icon="icon: cloud-upload"></span>
                    <span class="uk-text-middle">Attach binaries by dropping them here or</span>
                    <div uk-form-custom>
                        <input type="file" name="avatar">
                        <span class="uk-link"><i class="fas fa-cloud-upload-alt fa-3x"></i></span>
                    </div>
                </div>

                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                @if ($errors->has('avatar'))
                    <span class="help-block text-lowercase text-small text-danger">
                        <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('avatar') }}</small></strong>
                    </span>
                @endif



                <div class="form-group">

                        <button type="submit" class="btn btn-info font-weight-light text-uppercase">
                            <i class="fas fa-user-edit mr-1"></i>Update
                        </button>

                        <a class="ml-3 text-lowercase font-weight-light" href="{{ url('/login') }}">Logged again !</a>

                </div>

            </form>
        </div>

    </div>
</div>
@endsection
