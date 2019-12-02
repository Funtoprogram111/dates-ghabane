<!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
        {{--
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/all.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/uikit.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('frontend/css/style.css') }}"> --}}
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('build/css/application-96e681c7ad.css') }}">

        <style type="text/css">
            .turbolinks-progress-bar {
                  position: fixed;
                  display: block;
                  top: 0;
                  left: 0;
                  height: 6px;
                  background: #009CDC;
                  z-index: 9999;
                  transition: width 300ms ease-out, opacity 150ms 150ms ease-in;
                  transform: translate3d(0, 0, 0);
            }
        </style>

    </head>
    <body class="wrapper" data-spy="scroll" data-target="#navbar_wrapper" data-offset="0">

         <!-- Preloader -->
        <!-- <div id="loader-wrapper">
        <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div> -->


        <div class="main">


            @yield('navbar')



            @yield('content')



            @include('frontend.partials._footer')

        </div>




        <!--Scripts-->
        <script src="{{ secure_asset('build/js/application-4e87fa438e.js') }}" type="text/javascript" data-turbolinks-eval="false" data-turbolinks-suppress-warning=""></script>
        {{--
        <script src="{{ secure_asset('frontend/js/jquery.min.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/modernizr.min.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/scrollreveal.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/popper.min.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/bootstrap.min.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/uikit-icons.min.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/uikit.min.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/typeit.min.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/main.js') }}" type="text/javascript" async defer></script>
        <script src="{{ secure_asset('frontend/js/turbolinks.js') }}" type="text/javascript" data-turbolinks-eval="false" data-turbolinks-suppress-warning=""></script>--}}

        <script>
          $('div.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(100);
          }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(100);
          });
          $('.btn-contact').on('click', function() {
              var $this = $(this);
            $this.button('loading');
              setTimeout(function() {
                 $this.button('reset');
             }, 8000);
          });
        </script>
    </body>
</html>
