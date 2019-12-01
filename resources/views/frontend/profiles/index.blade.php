@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="animated bounceInLeft col-lg-6 col-md-8 col-sm-12 col-xs-12 text-center">
            <div class="text-block font-weight-light">Welcome to our new website<i class="far fa-smile ml-1"></i></div>
            <a title="dates_ghaban_home_page" href="{{ secure_url('/') }}">
                <img class="uk-border-circle" width="100px" src="{{ secure_asset('https://svgavatars.com/images/ri-grid/07.jpg') }}" alt="user_profile">
            </a>
            <h1 class="display-4 text-uppercase font-weight-bold">Update profile</h1>
            <div class="animated bounceInLeft text-block font-weight-light">hi <mark class="font-weight-bold">custumer</mark></div>
        </div>
    </div>

        <div class="row justify-content-center">

        <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
            <form class="animated bounceInLeft" method="POST" action="{{ secure_url('/profiles', $profile) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input placeholder="your name" id="name" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('name') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <input placeholder="Your email" id="email" type="email" class="form-control" name="email">

                        @if ($errors->has('email'))
                            <span class="help-block text-lowercase text-small text-danger">
                                <strong><small><i class="far fa-times-circle mr-1"></i>{{ $errors->first('email') }}</small></strong>
                            </span>
                        @endif

                </div>

                <div class="js-upload uk-placeholder uk-text-center">
                    <span uk-icon="icon: cloud-upload"></span>
                    <span class="uk-text-middle">Attach binaries by dropping them here or</span>
                    <div uk-form-custom>
                        <input type="file" multiple>
                        <span class="uk-link">selecting your avatar</span>
                    </div>
                </div>

                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>



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

@push('js')
  <script type="text/javascript">

      var bar = document.getElementById('js-progressbar');

      UIkit.upload('.js-upload', {

          url: '',
          multiple: true,

          beforeSend: function () {
              console.log('beforeSend', arguments);
          },
          beforeAll: function () {
              console.log('beforeAll', arguments);
          },
          load: function () {
              console.log('load', arguments);
          },
          error: function () {
              console.log('error', arguments);
          },
          complete: function () {
              console.log('complete', arguments);
          },

          loadStart: function (e) {
              console.log('loadStart', arguments);

              bar.removeAttribute('hidden');
              bar.max = e.total;
              bar.value = e.loaded;
          },

          progress: function (e) {
              console.log('progress', arguments);

              bar.max = e.total;
              bar.value = e.loaded;
          },

          loadEnd: function (e) {
              console.log('loadEnd', arguments);

              bar.max = e.total;
              bar.value = e.loaded;
          },

          completeAll: function () {
              console.log('completeAll', arguments);

              setTimeout(function () {
                  bar.setAttribute('hidden', 'hidden');
              }, 1000);

              alert('Upload Completed');
          }

      });

  </script>

@endpush
