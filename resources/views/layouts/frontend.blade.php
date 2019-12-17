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
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('build/css/application-377937899f.css') }}">

        <style type="text/css">
            .wrapper-tow{
              position: absolute;
              z-index: 99999;
              top: 11px;
              left: 11px;
            }
            .icon-wishlist {
              cursor: pointer;
              width: 22px;
              height: 21px;
              opacity: 0.5;
              background: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjIuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCA0LjI1IDQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQuMjUgNDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8Zz4KCTxwYXRoIGQ9Ik0yLjEyLDRDMi4xLDQsMi4wNywzLjk5LDIuMDUsMy45OEMxLjk4LDMuOTIsMC4zLDIuNjgsMC4wNCwxLjYyYy0wLjEtMC40My0wLjAxLTAuODgsMC4yNC0xLjJDMC41LDAuMTUsMC44MSwwLDEuMTYsMAoJCWMwLjUsMCwwLjgsMC4yNiwwLjk2LDAuNTFDMi4yOCwwLjI2LDIuNTksMCwzLjA4LDBjMC4zNSwwLDAuNjYsMC4xNSwwLjg4LDAuNDNjMC4yNSwwLjMyLDAuMzQsMC43NywwLjI0LDEuMgoJCUMzLjk1LDIuNjgsMi4yNywzLjkyLDIuMiwzLjk4QzIuMTgsMy45OSwyLjE1LDQsMi4xMiw0eiBNMS4xNiwwLjI1Yy0wLjM1LDAtMC41NywwLjE4LTAuNjgsMC4zM0MwLjI4LDAuODQsMC4yLDEuMjIsMC4yOSwxLjU3CgkJYzAuMjEsMC44NSwxLjUxLDEuOSwxLjg0LDIuMTVjMC4zMy0wLjI1LDEuNjMtMS4zMSwxLjg0LTIuMTVjMC4wOC0wLjM1LDAuMDEtMC43My0wLjE5LTAuOThDMy42NSwwLjQzLDMuNDMsMC4yNSwzLjA4LDAuMjUKCQljLTAuNjcsMC0wLjg0LDAuNTctMC44NCwwLjU4QzIuMjMsMC44OCwyLjE4LDAuOTIsMi4xMiwwLjkyaDBjLTAuMDYsMC0wLjEtMC4wNC0wLjEyLTAuMDlDMiwwLjgxLDEuODMsMC4yNSwxLjE2LDAuMjV6Ii8+CjwvZz4KPC9zdmc+Cg==");
            }
            .icon-wishlist:hover {
              opacity: 1;
            }
            .icon-wishlist.in-wishlist {
              opacity: 1;
              -webkit-animation-name: wishlist-ani;
              animation-name: wishlist-ani;
              -webkit-animation-duration: 1000ms;
              animation-duration: 1000ms;
              background: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxOS4xLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjE5NyAtODYuNzIgODE0LjA5NSA3NjgiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMTk3IC04Ni43MiA4MTQuMDk1IDc2ODsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCgkuc3Qwe2ZpbGw6IzIwMjAyMDt9DQoJLnN0MXtmaWxsOiNDQUQ3NDc7fQ0KPC9zdHlsZT4NCjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik02MDQuMDQ3LDY4MS4yOGMtMy44NCwwLTkuNi0xLjkyLTEzLjQ0LTMuODRjLTEzLjQ0LTExLjUyLTMzNi0yNDkuNi0zODUuOTItNDUzLjEyDQoJYy0xOS4yLTgyLjU2LTEuOTItMTY4Ljk2LDQ2LjA4LTIzMC40YzQyLjI0LTUxLjg0LDEwMS43Ni04MC42NCwxNjguOTYtODAuNjRjOTYsMCwxNTMuNiw0OS45MiwxODQuMzIsOTcuOTINCgljMzAuNzItNDgsOTAuMjQtOTcuOTIsMTg0LjMyLTk3LjkyYzY3LjIsMCwxMjYuNzIsMjguOCwxNjguOTYsODIuNTZjNDgsNjEuNDQsNjUuMjgsMTQ3Ljg0LDQ2LjA4LDIzMC40DQoJYy00OCwyMDEuNi0zNzAuNTYsNDM5LjY4LTM4NCw0NTEuMkM2MTUuNTY4LDY3OS4zNiw2MDkuODA3LDY4MS4yOCw2MDQuMDQ3LDY4MS4yOHoiLz4NCjxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik00MTkuNzI4LTM4LjcyYy02Ny4yLDAtMTA5LjQ0LDM0LjU2LTEzMC41Niw2My4zNmMtMzguNCw0OS45Mi01My43NiwxMjIuODgtMzYuNDgsMTkwLjA4DQoJYzQwLjMyLDE2My4yLDI4OS45MiwzNjQuOCwzNTMuMjgsNDEyLjhjNjMuMzYtNDgsMzEyLjk2LTI1MS41MiwzNTMuMjgtNDEyLjhjMTUuMzYtNjcuMiwxLjkyLTE0MC4xNi0zNi40OC0xODguMTYNCgljLTI0Ljk2LTMwLjcyLTY3LjItNjUuMjgtMTM0LjQtNjUuMjhjLTEyOC42NCwwLTE2MS4yOCwxMDkuNDQtMTYxLjI4LDExMS4zNmMtMS45Miw5LjYtMTEuNTIsMTcuMjgtMjMuMDQsMTcuMjhsMCwwDQoJYy0xMS41MiwwLTE5LjItNy42OC0yMy4wNC0xNy4yOEM1ODEuMDA4LDY4LjgsNTQ4LjM2Ny0zOC43Miw0MTkuNzI4LTM4LjcyeiIvPg0KPC9zdmc+DQo=");
            }
            @-webkit-keyframes wishlist-ani {
              0% {
                -webkit-transform: scale(1);
                transform: scale(1);
              }
              25% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
              }
              50% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
              }
              100% {
                -webkit-transform: scale(1);
                transform: scale(1);
              }
            }
            @keyframes wishlist-ani {
              0% {
                -webkit-transform: scale(1);
                transform: scale(1);
              }
              25% {
                -webkit-transform: scale(0.5);
                transform: scale(0.5);
              }
              50% {
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
              }
              100% {
                -webkit-transform: scale(1);
                transform: scale(1);
              }
            }



            .search-wrapper {
                position: absolute;
                transform: translate(-50%, -50%);
                top:50%;
                left:50%;
            }
            .search-wrapper.active {}

            .search-wrapper .input-holder {
                height: 70px;
                width:70px;
                overflow: hidden;
                background: rgba(255,255,255,0);
                border-radius:6px;
                position: relative;
                transition: all 0.3s ease-in-out;
            }
            .search-wrapper.active .input-holder {
                width:450px;
                border-radius: 50px;
                background-color:  #222f45;
                transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
            }
            .search-wrapper .input-holder .search-input {
                width:100%;
                height: 50px;
                padding:0px 70px 0 20px;
                opacity: 0;
                position: absolute;
                top:0px;
                left:0px;
                background-color: #222f45;
                box-sizing: border-box;
                border:none;
                outline:none;
                line-height: 20px;
                color:#FFF;
                transform: translate(0, 60px);
                transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);
                transition-delay: 0.3s;
            }
            .search-wrapper.active .input-holder .search-input {
                opacity: 1;
                transform: translate(0, 10px);
            }
            .search-wrapper .input-holder .search-icon {
                width:70px;
                height:70px;
                border:none;
                border-radius:6px;
                background: #FFF;
                padding:0px;
                outline:none;
                position: relative;
                z-index: 2;
                float:right;
                cursor: pointer;
                transition: all 0.3s ease-in-out;
            }
            .search-wrapper.active .input-holder .search-icon {
                width: 50px;
                height:50px;
                margin: 10px;
                border-radius: 30px;
            }
            .search-wrapper .close {
                position: absolute;
                z-index: 1;
                top:24px;
                right:20px;
                width:25px;
                height:25px;
                cursor: pointer;
                transform: rotate(-180deg);
                transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
                transition-delay: 0.2s;
            }
            .search-wrapper.active .close {
                right:-50px;
                transform: rotate(45deg);
                transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
                transition-delay: 0.5s;
            }
            .search-wrapper .close::before, .search-wrapper .close::after {
                position:absolute;
                content:'';
                background: #222f45;
                border-radius: 2px;
            }
            .search-wrapper .close::before {
                width: 5px;
                height: 25px;
                left: 10px;
                top: 0px;
            }
            .search-wrapper .close::after {
                width: 25px;
                height: 5px;
                left: 0px;
                top: 10px;
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
        <script src="{{ secure_asset('build/js/application-94677f4208.js') }}" type="text/javascript" data-turbolinks-eval="false" data-turbolinks-suppress-warning=""></script>
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
    </body>
</html>
