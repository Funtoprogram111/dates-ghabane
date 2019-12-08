<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'dates-Ghaban | dates-ghaban.com')</title>


        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{secure_asset('frontend/images/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{secure_asset('frontend/images/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{secure_asset('frontend/images/favicon-16x16.png')}}">
        <link rel="manifest" href="{{secure_asset('frontend/images/site.webmanifest')}}">

        <!-- Styles -->

        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/uikit.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/bootstrap-formhelpers.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/style.css') }}">

        {{--<link rel="stylesheet" type="text/css" href="{{ secure_asset('build/css/application-96e681c7ad.css') }}">--}}
        @stack('css')

    </head>
<body >
    <div id="app">

        <main class="py-4" style="padding-top: 5%;">

            @yield('content')

        </main>

    </div>

    <!--Scripts-->

    {{-- <script src="{{ secure_asset('frontend/js/jquery.min.js') }}" type="text/javascript" async defer></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ secure_asset('frontend/js/popper.min.js') }}" type="text/javascript" async defer></script>
    <script src="{{ secure_asset('frontend/js/bootstrap.min.js') }}" type="text/javascript" async defer></script>
    <script src="{{ secure_asset('frontend/js/uikit.min.js') }}" type="text/javascript" async defer></script>
    <script src="{{ secure_asset('frontend/js/bootstrap-formhelpers.min.js') }}" type="text/javascript" async defer></script>
    <script src="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js') }}" type="text/javascript" data-turbolinks-eval="false" data-turbolinks-suppress-warning=""></script>--}}

    <script src="{{ secure_asset('build/js/application-4e87fa438e.js') }}" type="text/javascript" data-turbolinks-eval="false" data-turbolinks-suppress-warning=""></script>

    @stack('js')

    <script>
    /*$( document ).ready(function() {
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
    });*/

    </script>

</body>
</html>
