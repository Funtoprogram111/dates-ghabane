<nav id="navbar_wrapper" class="navbar navbar-expand-lg navbar-dark text-uppercase fixed-top">
<div class="container">
<a class="text-uppercase navbar-brand" href="{{ secure_url('/') }}" title="dates_ghaban"><img class="img-fluid" src="{{ secure_asset('frontend/images/Logo.png') }}" alt="logo_dates_ghaban"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarColor01">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a title="home" class="nav-link smoothscroll" href="#home">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a title="about_us" class="nav-link smoothscroll" href="#aboutUs">About us</a>
    </li>
    <li class="nav-item">
      <a title="our_products" class="nav-link smoothscroll" href="#OurProducts">Our products</a>
    </li>
    <li class="nav-item">
      <a title="contact_us" class="nav-link smoothscroll" href="#contactUs">Contact us</a>
    </li>
    <li class="nav-item">
      <a title="cart" class="nav-link" href="{{ route('cart.index') }}">

        @if (Cart::count() > 0)
          <span class="sonar-effect uk-badge">{{ Cart::count() }}</span>
          <i class="fab fa-opencart fa-1x mr-1"></i>Cart</a>
        @else
          <span class="uk-badge" style="background: #000">{{ Cart::count() }}</span>
          <i class="fab fa-opencart fa-1x mr-1"></i>Cart</a>
        @endif

    </li>

    <li class="nav-item">

      @if (Auth::check())
      <div class="dropdown show">
        <a id="dropdownMenuLink" href="" title="users_account" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="mr-1 border border-info uk-border-circle" width="22px" src="{{ secure_asset('/uploads/'. Auth::user()->avatar) }}" alt="">
            {{ Auth::user()->name }}
        </a>
        <div style="background-color: transparent;" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="nav-link dropdown-item" href="{{ secure_url('/logout') }}"><i class="far fa-user fa-1x mr-1"></i>Logged Out</a>
          <a class="nav-link dropdown-item" href="{{ secure_url('/profile', $user->id) }}"><i class="far fa-user fa-1x mr-1"></i>profile</a>
        </div>
      </div>

      @else

      <a href="{{ secure_url('/login') }}" title="users_account" class="nav-link"><i class="far fa-user fa-1x mr-1"></i>
          Account
      </a>

      @endif

    </li>
    <li class="nav-item d-flex">
      <a title="US" class="nav-link mr-2" href="#">
        <svg width=20px height=20px xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-um" viewBox="0 0 640 480">
          <defs>
            <clipPath id="a">
              <path fill-opacity=".7" d="M0 0h682.7v512H0z"/>
            </clipPath>
          </defs>
            <g fill-rule="evenodd" clip-path="url(#a)" transform="scale(.9375)">
              <g stroke-width="1pt">
                <path fill="#bd3d44" d="M0 0h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8V197H0zm0 78.8h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8v39.4H0zm0 78.8h972.8V512H0z"/>
                <path fill="#fff" d="M0 39.4h972.8v39.4H0zm0 78.8h972.8v39.3H0zm0 78.7h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8v39.4H0z"/>
              </g>
              <path fill="#192f5d" d="M0 0h389.1v275.7H0z"/>
              <path fill="#fff" d="M32.4 11.8L36 22.7h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0l3.6 10.9H177l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0l3.5 10.9H242l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0l3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 39.4l3.5 10.9h11.5L70.6 57 74 67.9l-9-6.7-9.3 6.7L59 57l-9-6.7h11.4zm64.8 0l3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7L124 57l-9.3-6.7h11.5zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0l3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0l3.5 10.9h11.5L330 57l3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 66.9L36 78h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7H29zm64.9 0l3.5 11h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zm64.8 0l3.6 11H177l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7h11.5zm64.9 0l3.5 11H242l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.4zm64.8 0l3.6 11h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.2-6.7h11.4zm64.9 0l3.5 11h11.5l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.5zM64.9 94.5l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0l3.6 10.9h11.4l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0l3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 122.1L36 133h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0l3.6 10.9H177l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0l3.5 10.9H242l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0l3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 149.7l3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zm64.8 0l3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.5zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7H191zm64.8 0l3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7H256zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zM32.4 177.2l3.6 11h11.4l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0l3.5 11h11.5l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0l3.6 11H177l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0l3.5 11H242l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0l3.6 11h11.4l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0l3.5 11h11.5l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 204.8l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0l3.6 10.9h11.4l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0l3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 232.4l3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.3-6.7H29zm64.9 0l3.5 10.9h11.5L103 250l3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.4zm64.8 0l3.6 10.9H177l-9 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.3-6.7h11.5zm64.9 0l3.5 10.9H242l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.4zm64.8 0l3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.2-6.7h11.4zm64.9 0l3.5 10.9h11.5l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.5z"/>
            </g>
        </svg>
      </a>
      <a title="SA" class="nav-link" href="#">
        <svg width=20px height=20px xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 500">
          <rect width="750" fill="#006c35" height="500"/>
          <path fill-rule="evenodd" d="m323.28 118.09c-0.3878-0.0115-0.96797 0.20495-1.7812 0.6875-1.8284 1.2256-5.4516 5.0006-5.5625 9.3438-0.11087 2.4503-0.57338 2.4407 1.0312 4 1.1591 1.6712 2.3168 1.5069 4.6562 0.28125 1.3436-0.98979 1.7974-1.6212 2.25-3.2812 0.55738-2.7839-2.9295 1.3172-3.375-1.7812-0.77915-2.8766 1.4468-4.0598 3.5625-6.8438 0.0485-1.3111 0.0719-2.381-0.78125-2.4062zm34.062 0.1875c-0.65345 0.088-1.4528 0.92515-2.5625 2.9375-0.79526 2.1076-4.2255 5.2972-1.75 11.875 2.0249 4.1708 2.8567 10.949 1.9375 18.5-1.403 2.1459-1.723 2.8854-3.5625 5.0312-2.5843 2.7789-5.3833 2.0684-7.5312 1.0312-2.0068-1.3526-3.5838-2.0469-4.5-6.3438 0.16531-6.8489 0.56436-18.059-0.6875-20.438-1.8455-3.684-4.8873-2.3628-6.1875-1.25-6.2472 5.712-9.3329 15.357-11.219 23.031-1.7326 5.593-3.5788 3.9755-4.875 1.7188-3.1558-2.9573-3.3775-26.083-7.1875-22.281-6.1021 17.44 3.5018 36.545 10.156 34.688 4.8008 1.9876 7.847-7.1505 9.8125-17.156 1.3446-2.8081 2.3721-3.1309 3.0625-1.6875-0.17741 13.306 0.95406 16.274 4.375 20.312 7.6311 5.8874 13.943 0.7459 14.438 0.25 0.49491-0.4949 5.9375-5.9375 5.9375-5.9375 1.3224-1.391 3.0698-1.4756 4.9375-0.25 1.8153 1.65 1.5822 4.4922 5.4688 6.4688 3.2708 1.3083 10.255 0.31819 11.875-2.5 2.1802-3.7364 2.7088-5.0203 3.7188-6.4375 1.5562-2.0713 4.2188-1.1542 4.2188-0.5-0.24796 1.1551-1.8124 2.2946-0.75 4.375 1.8506 1.3879 2.2804 0.49593 3.375 0.1875 3.8715-1.8506 6.7812-10.25 6.7812-10.25 0.17134-3.1327-1.611-2.8951-2.75-2.25-1.4857 0.90815-1.5768 1.2168-3.0625 2.125-1.8929 0.28122-5.5597 1.5299-7.375-1.2812-1.8536-3.3796-1.8641-8.0912-3.2812-11.5 0-0.24795-2.4765-5.3599-0.1875-5.6875 1.1551 0.21469 3.6392 0.85659 4.0312-1.2188 1.2116-2.0229-2.6142-7.7615-5.2188-10.656-2.2608-2.4815-5.3824-2.784-8.4062-0.25-2.1177 1.9483-1.8035 4.1242-2.2188 6.1875-0.53925 2.3697-0.43618 5.3048 1.9688 8.4375 2.1136 4.1678 5.9535 9.5151 4.6875 17.062 0 0-2.2313 3.5917-6.1562 3.125-1.6359-0.35681-4.3016-1.0648-5.7188-11.531-1.0724-7.9224 0.26872-19.022-3.0938-24.219-0.75911-1.9611-1.4109-3.8654-2.5-3.7188zm-10.78 0.84c-1.0171 0.0888-2.1438 1.2735-3.0625 3.5625-0.78821 1.7407-1.751 10.844-1.5938 10.844-0.62896 2.7093 2.8308 3.8574 4.4062 0.375 2.3616-6.3843 2.373-9.1042 2.5312-11.812-0.3679-2.0627-1.2641-3.0576-2.2812-2.9688zm39.812 0.71875c-1.0447 0.0947-1.8768 0.70635-2.1875 2.25-0.41629 3.6296-0.20355 5.6032 0.40625 8.625 0.46769 2.0149 3.4004 5.3884 4.8438 7.3438 6.896 9.2694 13.531 18.583 19.938 28.219 1.0072 7.155 1.7452 14.154 2.2188 21.125 1.0382 15.284 1.3537 34.31 0.40625 50.406 2.8636 0.1129 7.4518-4.6239 9.0625-11.562 1.0472-9.5976-0.37299-29.18-0.46875-34.844-0.0675-2.3514-0.21224-5.157-0.375-8.0938 7.4527 12.179 14.683 25.082 21.781 39.25 2.5874-1.2297 2.0139-15.798 0.5-17.844-5.6807-12.227-13.529-24.296-16.031-28.938-0.90311-1.6763-3.9793-6.3547-7.625-11.75-0.67122-7.6985-1.4006-14.219-1.875-16.188-1.1722-8.1381 3.3447 0.91775 2.7188-3.8125-1.4656-8.127-5.9513-13.65-11.25-21.094-1.7085-2.4211-1.6747-2.9149-4.3125 0.59375-1.5766 3.5768-1.5553 6.5526-1.0938 9.3438-0.69381-1.0083-1.5514-2.2039-2.7812-3.6875-4.576-3.9259-4.8583-4.1405-8.6562-7.3438-1.1976-0.84982-3.4776-2.1579-5.2188-2zm118 1.2188c-0.50876-0.0791-1.0631 0.17099-1.6875 1.0938-1.1934 1.0462-2.4768 2.9408-2.4375 5.375 0.29027 4.2888 1.0535 8.68 1.3438 12.969 0.10229 0.57392 0.2102 1.1448 0.3125 1.7188-0.46081-0.58803-0.86314-1.0469-1.0938-1.2812-8.3598-8.7822 3.841-1.4353-1.5938-8.2188-4.5962-5.0467-5.941-6.6526-9.875-9.6875-1.9726-1.275-3.1644-3.7112-3.8125 0.4375-0.25802 3.6447-0.52618 7.8653-0.28125 10.938-0.0141 1.7074 1.7542 4.9216 3.2812 6.8125 5.5768 6.8517 11.273 14.142 17 21.75 1.2052 15.516 1.5266 29.739 2.75 45.281-0.17335 6.6473-2.218 15.476-4.1562 16.312 0 0-2.9599 1.7004-4.9375-0.1875-1.4383-0.57755-7.1875-9.5938-7.1875-9.5938-2.9432-2.6982-4.9055-1.9272-7 0-5.7755 5.5769-8.3876 16.023-12.312 23.219-1.012 1.6056-3.8623 2.9724-7.0312-0.125-8.0484-10.996-3.3419-26.648-4.3438-22.625-7.1685 8.0786-3.9938 21.465-2.375 24.344 2.3636 4.7282 4.2758 7.7553 8.875 10.094 4.189 3.0833 7.4508 1.159 9.25-1 4.2152-4.3684 4.2714-15.54 6.25-17.75 1.3879-4.06 4.8662-3.3617 6.5625-1.5625 1.644 2.3636 3.585 3.9014 6 5.1875 3.9319 3.4683 8.6246 4.0984 13.25 0.9375 3.1609-1.773 5.2119-4.0772 7.0625-8.625 1.9856-5.3106 1.0038-33.142 0.5625-48.625 2.9696 4.1831 5.9006 8.4568 8.8125 12.781 1.2782 13.591 1.8582 26.976 1.4375 39.812-0.30139 2.5521 8.9062-7.6196 8.8438-12.438-0.0415-4.2158 0.008-8.0366 0-11.594 4.466 7.1306 8.789 14.38 12.875 21.719 2.532-1.3416 1.6641-15.678 0.0625-17.656-4.2781-7.1786-9.7567-14.936-14-20.938-0.83864-7.5749-1.9805-16.512-2.5-19.25-0.8094-4.2696-1.6201-10.683-2.8438-15.75-0.33567-1.9786-1.3488-8.2985-1.0312-8.9062 0.49893-1.4141 2.3842 0.0452 3.3125-1.5938 1.3899-1.5149-4.8179-17.598-7.9688-22.188-1.1329-2.0572-3.1818-1.3453-5.7188 2-2.3526 2.2013-1.4918 7.2234-0.59375 12 2.3327 12.174 4.4149 24.572 6.0625 36.938-3.0501-4.5343-6.7725-10.021-10.438-15.312-0.0985-0.51026-0.46875-2.3803-0.46875-2.4062-0.00002-0.21873-0.50509-9.959-0.9375-12.281-0.0756-0.94243-0.30028-1.2137 0.6875-1.0938 1.0473 0.88094 1.1896 0.92846 1.8438 1.2188 1.0573 0.19352 1.9818-1.594 1.3438-3.25-3.2708-6.0325-6.5418-12.092-9.8125-18.125-0.3936-0.38756-0.83499-0.79588-1.3438-0.875zm-304.53 0.3125c-1.8123-0.0518-3.8118 1.0716-3.0312 3.25-0.45458 1.1873 3.5475 5.2009 4.25 7.4062 0.62996 1.5704-0.62483 6.6271 0.6875 7.0938 1.2065 0.52312 2.868-3.5005 3.5-7.2188 0.34975-2.037 0.0851-9.0082-4.6562-10.438-0.24291-0.0549-0.4911-0.0863-0.75-0.0937zm346.91 0.04c-0.41312 0.041-0.91624 0.70862-1.6875 2.3438-1.8546 3.0379-2.4928 8.4774-1.75 13.281 4.4652 30.203 7.7834 59.449 8.4688 86.219-0.38402 2.541-0.49612 3.8926-1.6875 7.0938-2.6358 3.3786-5.5427 7.6142-8.2812 9.6562-2.7376 2.0411-8.5638 3.9871-10.469 5.5-6.0436 3.4935-6.074 7.5111-1.1875 7.6562 8.4213-0.97769 18.386-1.6686 25.25-12.031 1.8365-2.9038 3.999-10.776 4.0938-15.594 0.64204-28.247-0.36143-55.866-4.5938-76.281-0.27113-1.9887-1.1492-6.5596-0.8125-7.1562 0.54529-1.398 3.3005 0.13992 4.2812-1.4688 1.4394-1.4696-7.1254-12.436-10.125-17.125-0.59928-1.1776-0.96885-2.1465-1.5-2.0938zm-88.312 0.46875c-0.34774 0.06-0.86114 0.58925-1.8125 1.8438-2.3525 7.6916-3.1793 13.973-2.2812 18.75 6.0426 31.534 12.234 60.263 11.25 90.281 2.8656 0.0191 6.1786-6.5553 7.5938-13.062 0.7751-8.9636-0.51716-14.419-0.75-19.688-0.23181-5.2685-5.9639-48.014-7.125-52-1.401-7.5374 5.5735-0.99148 4.8125-5.375-2.411-5.5265-8.4287-13.574-10.312-18.375-0.70808-1.2858-0.79543-2.475-1.375-2.375zm-215.03 0.59375c-0.7426 0.12864-1.4592 0.74056-1.7188 1.75-0.16329 0.66121 0.28622 1.7611-0.3125 2.0938-0.3437 0.34673-1.6482 0.11368-1.5938-1.7188 0-0.58359-0.42846-1.1926-0.6875-1.5625-0.26005-0.17034-0.43554-0.21875-0.90625-0.21875-0.57352 0.0232-0.56052 0.17445-0.875 0.65625-0.14 0.49-0.32 0.97-0.32 1.53-0.0716 0.65214-0.33273 0.873-0.8125 0.96875-0.53623 0-0.40932 0.0584-0.84375-0.21875-0.25803-0.28222-0.5625-0.3932-0.5625-0.875 0-0.49892-0.13107-1.2954-0.28125-1.625-0.22778-0.30036-0.58775-0.45667-1-0.5625-2.2467 0.008-2.4103 2.5898-2.2812 3.5625-0.16832 0.18344-0.25163 4.7592 2.8125 6.0312 4.1134 1.9614 11.827 1.1322 11.5-5.5 0.00001-0.58662-0.12904-2.5565-0.1875-3.0938-0.41981-0.9777-1.1949-1.3474-1.9375-1.2188zm55.188 0.0625c-1.4216 0.0725-2.6766 0.47991-3.75 1.0312-2.7265 2.6106-3.3657 6.7957-1.2188 9.4062 2.0895 0.98677 4.1742 3.0899 2.7812 4.25-5.9087 6.3111-21.287 16.857-22.062 18.781-0.006 0.0157-0.0279 0.0481-0.0312 0.0625-0.002 0.0138 0.00015 0.05 0 0.0625 0.00047 0.006-0.001 0.0256 0 0.0312 0.005 0.0159 0.0214 0.0496 0.0312 0.0625 0.004 0.004 0.0268 0.0276 0.0312 0.0312 0.005 0.003 0.0257-0.003 0.0312 0 0.006 0.003 0.0245 0.029 0.0312 0.0312 0.007 0.002 0.0233-0.002 0.0312 0 0.002 0.002 0.0286 0.029 0.0312 0.0312 0.78147 0.52416 10.404 0.51176 11.469 0.0312 0.008-0.004 0.0248-0.0271 0.0312-0.0312 0.003-0.002 0.0286 0.002 0.0312 0 0.002-0.002-0.002-0.0291 0-0.0312 3.307-1.2186 19-19.156 19-19.156-0.81342-0.69647-1.5626-1.2098-2.375-1.9062-0.87086-0.75393-0.78317-1.4951 0-2.25 3.8866-2.2618 2.655-7.2382 0.625-9.5-1.6828-0.75445-3.2659-1.01-4.6875-0.9375zm144.25 0.0625c-0.41312 0.041-0.91624 0.67737-1.6875 2.3125-1.8546 3.0379-3.1149 8.3282-2.9688 13.281 4.0176 27.814 5.2493 52.154 7.875 79.969 0.21369 2.6902-0.18067 6.598-1.9688 8.1562-6.6141 6.9064-16.151 15.424-26.531 19.344-1.1168 1.2539 2.7768 6.5988 7.8125 6.5938 8.4213-0.9777 15.823-5.7042 22.688-18.156 1.8355-2.9039 5.0615-9.1196 5.1562-13.938 0.64205-28.247-1.4239-50.209-5.6562-70.625-0.27114-1.9886-0.0867-4.3408 0.25-4.9375 0.54529-0.65112 2.3943 0.0149 3.375-1.5938 1.4393-1.4696-3.8441-13.655-6.8438-18.344-0.59928-1.1776-0.96885-2.1152-1.5-2.0625zm-223.47 0.85c-1.1623 0.1359-2.2557 1.0822-2.7812 2.3438-0.19454 4.4611-0.2207 8.9199 0.28125 13.031 2.029 7.2108 2.6715 13.553 3.6562 20.938 0.27314 9.8909-5.7117 4.2786-5.4375-0.625 1.3819-6.3692 1.0089-16.396-0.21875-18.938-0.97367-2.541-2.1011-3.1683-4.4688-2.75-1.8798-0.1149-6.7361 5.1765-8.0938 13.938 0.00001-0.00001-1.1311 4.4965-1.625 8.5-0.66423 4.5246-3.6616 7.7288-5.75-0.625-1.8052-6.0718-2.9147-21.032-5.9375-17.531-0.86582 11.681-1.8939 32.235 8.0312 34.344 12.005 1.1541 5.3735-20.294 9.7188-24.188 0.82147-1.9242 2.3438-1.9584 2.4688 0.46875v18.219c-0.10986 5.9226 3.7877 7.6826 6.8125 8.9062 3.1478-0.24292 5.235-0.15687 6.4688 2.9062 0.49188 10.502 1.0081 21.03 1.5 31.531 0 0 7.2773 2.0912 7.625-17.719 0.34876-11.632-2.3163-21.393-0.75-23.656 0.0554-2.2235 2.9055-2.3335 4.875-1.25 3.1377 2.2134 4.5298 4.9374 9.4062 3.8438 7.4204-2.0441 11.89-5.6459 12-11.344-0.43342-5.4146-1.0598-10.835-3.4062-16.25 0.32759-0.98475-1.4203-3.5465-1.0938-4.5312 1.3335 2.0884 3.3509 1.9151 3.8125 0-1.263-4.1618-3.2292-8.1494-6.4062-9.875-2.6257-2.3132-6.4679-1.824-7.875 3-0.65214 5.5588 2.0146 12.147 6.0625 17.531 0.85977 2.1036 2.0624 5.6022 1.5312 8.75-2.154 1.2287-4.2896 0.7175-6.0938-1.1875 0.00001-0.00001-5.9062-4.4215-5.9062-5.4062 1.5673-10.035 0.33759-11.184-0.53125-13.969-0.60677-3.8443-2.4286-5.0618-3.9062-7.6875-1.4776-1.5663-3.482-1.5663-4.4375 0-2.6106 4.5256-1.3858 14.242 0.5 18.594 1.3627 4.0025 3.4525 6.5 2.4688 6.5-0.81038 2.2618-2.5002 1.7356-3.7188-0.875-1.7397-5.3955-2.0938-13.437-2.0938-17.062-0.52212-4.4944-1.1042-14.095-4.0625-16.531-0.78934-1.0751-1.721-1.4494-2.625-1.3438zm42.156 0.0625c-0.59574 0.0753-1.2543 0.41445-2.0312 0.59375-2.5521 0.8124-4.9414 3.0187-4.1875 7.3125 3.0168 18.332 4.9832 32.323 8 50.656 0.46368 2.1469-1.336 4.9768-3.6562 4.6875-3.9451-2.669-4.9242-8.0746-11.656-7.8438-4.8734 0.0585-10.431 5.3615-11.125 10.469-0.81239 4.059-1.1017 8.4601 0 12 3.425 4.1184 7.5277 3.6793 11.125 2.75 2.9583-1.2176 5.3923-4.133 6.4375-3.4375 0.003 0.003 0.0286-0.004 0.0312 0 0.003 0.004-0.003 0.027 0 0.0312 0.64509 1.1276-0.0608 10.663-13.938 18.031-8.5281 3.8292-15.316 4.7441-18.969-2.2188-2.2628-4.3513 0.16462-20.924-5.4062-17.094-16.475 42.467 38.598 48.395 44.75 1.75 0.39844-1.3159 1.6121-2.6362 2.4688-2.3125 0.3759 0.16008 0.71998 0.67052 0.84375 1.625-1.2771 42.235-42.606 45.13-49.625 31.844-1.7397-3.1317-2.2631-10.103-2.4375-14.281-0.31817-2.5275-0.95237-3.9854-1.6875-4.5625-1.6745-1.2582-3.9247 2.023-4.4062 7.7188-0.69647 4.5831-0.5 5.8413-0.5 10.25 2.2044 33.359 55.388 19.026 64.031-8.5312 4.2787-14.246-0.0871-24.993 1.3438-26.312 0.0124-0.0104 0.0493-0.0222 0.0625-0.0312 0.0136-0.008 0.048-0.0242 0.0625-0.0312 0.0149-0.006 0.0467-0.0262 0.0625-0.0312 0.0487-0.013 0.13046-0.0305 0.1875-0.0312 5.2796 5.6868 12.688 0.72253 14.312-1.25 0.69648-0.98677 2.4387-1.6198 3.6562-0.34375 4.1184 2.9603 11.337 1.5649 12.844-3.6562 0.87085-5.1052 1.6069-10.361 1.7812-15.812-2.6827 0.83292-4.8475 1.4566-5.7188 2.375-0.20749 0.22659-0.36097 0.47794-0.40625 0.75-0.23283 1.5089-0.45467 3.0224-0.6875 4.5312-0.0249 0.12473-0.065 0.23996-0.125 0.34375-0.11434 0.18521-0.30336 0.35601-0.5 0.46875-0.94842 0.51783-2.6022 0.22171-2.6875-1.1562-1.276-5.8017-6.5276-6.5563-9.7188 2.4375-2.1469 1.7397-6.0616 2.0793-6.4688-0.53125 0.52213-6.0335-1.9089-6.8434-6.7812-4-1.5664-11.951-3.1202-23.361-4.6875-35.312 2.031-0.0585 3.8934 1.414 5.75-0.90625-2.0092-6.2487-6.2607-18.963-8.6562-20.156-0.0188-0.009-0.0439-0.024-0.0625-0.0312-0.10876-0.1305-0.23745-0.25071-0.34375-0.34375-0.0442-0.0375-0.1123-0.0933-0.15625-0.125-0.0439-0.0305-0.11251-0.0687-0.15625-0.0937-0.0962-0.0528-0.21644-0.0958-0.3125-0.125-0.2184-0.0619-0.43059-0.091-0.65625-0.0625zm164.34 0.0937c-2.1076-0.0625-4.4397 1.2657-3.5312 3.9062-0.52916 1.4403 4.5283 6.326 5.3438 9 1.4676 4.1084-1.1208 8.0273 0.40625 8.5938 1.4051 0.63399 3.36-4.2415 4.0938-8.75 0.84767-3.6447-1.7525-11.114-5.4375-12.656-0.28247-0.0665-0.57391-0.0848-0.875-0.0937zm-128.03 4.5c0.95979-0.0978 2.1195 0.78407 2.6875 2.0312 0.60588 1.3303 0.30199 2.6014-0.6875 2.8438-0.98948 0.24236-2.2691-0.63842-2.875-1.9688-0.60586-1.3303-0.30199-2.6326 0.6875-2.875 0.0618-0.0152 0.12351-0.0247 0.1875-0.0312zm237.5 6.1562c-1.9215-0.0673-4.0156 1.3916-3.1875 4.25-0.4818 1.5593 4.1009 6.8552 4.8438 9.75 0.66826 2.0602-1.017 8.6997 0.375 9.3125 1.2811 0.6864 3.0818-4.5873 3.75-9.4688 0.37092-2.672-1.6093-12.049-4.9688-13.719-0.25753-0.0719-0.538-0.11538-0.8125-0.125zm-131.31 3.25c0.17575 0.78356 0.3514 1.5724 0.46875 2.375 0.39382 1.7317 0.73331 3.4518 1.0938 5.1562-1.5169-2.0887-2.7725-3.7763-3.3125-4.375-3.4323-4.079 0.0773-2.6786 1.75-3.1562zm30.25 14.875c-0.7426 0.12864-1.4592 0.7718-1.7188 1.7812-0.16329 0.6612 0.31746 1.7299-0.28125 2.0625-0.3437 0.34673-1.6794 0.14492-1.625-1.6875-0.00001-0.5836-0.42846-1.2238-0.6875-1.5938-0.26003-0.17035-0.43554-0.21875-0.90625-0.21875-0.57353 0.0232-0.56053 0.17446-0.875 0.65625-0.13304 0.49087-0.3125 0.97487-0.3125 1.5312-0.0716 0.65214-0.30147 0.87299-0.78125 0.96875-0.53622 0-0.44058 0.0584-0.875-0.21875-0.25804-0.28221-0.5625-0.39321-0.5625-0.875 0.00001-0.49893-0.13107-1.2954-0.28125-1.625-0.2278-0.30037-0.58776-0.42541-1-0.53125-2.2467 0.008-2.379 2.5586-2.25 3.5312-0.16834 0.18344-0.28288 4.7905 2.7812 6.0625 4.1134 1.9614 11.858 1.101 11.531-5.5312 0.00001-0.58662-0.16029-2.5565-0.21875-3.0938-0.41981-0.9777-1.1949-1.3474-1.9375-1.2188zm-138.12 1.375c-0.5072-0.0517-1.1721 0.13451-1.9375 0.59375-3.6376 1.9675-5.0461 7.8039-2.7812 11.219 2.1157 3.0077 5.4607 1.9062 5.9062 1.9062 3.564 0.4455 5.6875-6.6875 5.6875-6.6875-0.00001 0 0.10732-2.0056-4.125 1.7812-1.781 0.33363-2.0232-0.3096-2.4688-1.3125-0.37093-1.8556-0.29122-3.7371 0.5625-5.5938 0.39436-1.1131 0.002-1.8201-0.84375-1.9062zm195.25 0.90625c-2.0194-0.0982-4.1688 1.2095-4.7188 3.9688 0.008 1.6278 0.73488 2.5224 0.59375 4-0.21065 0.84465-1.0809 1.4001-3.1562 0.40625 0.32455-0.29835-1.3438-2.6562-1.3438-2.6562-1.6188-0.98576-3.7804 0.0535-5.1875 0.96875-0.7741 1.4071-1.3467 3.8189-0.46875 6.2812 2.3233 4.2928 10.293 11.618 14.094 11.688 0.0706-3.8705 0.4466-9.0175 0.65625-12.219 0.0897-1.2085 0.37315-2.5404 1.5312-2.8438 1.1571-0.30238 3.1653 1.1642 3.1875-0.0937-0.21066-2.4624-0.70279-6.096-2.0938-7.8125-0.71249-1.0557-1.8821-1.6286-3.0938-1.6875zm-161.62 13.469c-0.0537 0.0197-0.10688 0.0656-0.15625 0.0937-0.0242 0.0147-0.0693 0.0449-0.0937 0.0625-0.40219 0.30193-0.87679 0.99874-1.9375 1.75-1.7891 2.035-2.1098 3.4521-2 7.5312 0.10179 0.43147 3.3965 9.5919 6.1875 16.031 1.8818 6.6927 3.6228 14.356 2.3438 21.594-4.4057 9.5684-13.263 18.15-21.812 22.812-4.3557 1.395-8.1174 0.91994-9.125-0.0312-0.008-0.008-0.024-0.0236-0.0312-0.0312-2.5014-1.6818-2.5588-4.6756-2.4062-5.1875-0.00005-0.003 0.00017-0.0277 0-0.0312 0.006-0.006 0.0255-0.0258 0.0312-0.0312 7.2138-5.0246 15.454-9.0914 21.906-22.656 1.905-5.1838 2.4866-8.2964 0.59375-16.312-0.73791-2.9868-1.6494-5.4446-3.6875-7.5625 0.005-0.006 0.0259-0.0257 0.0312-0.0312 1.228-0.58751 4.4141 1.7597 4.9062 0.28125-0.75393-3.8271-3.3461-8.965-6.2812-11.594-2.5702-2.3344-5.3662-2.6046-7.7188-0.46875-2.6499 1.4746-3.2135 6.7707-1.9375 11.406 1.4172 3.4895 5.2433 4.1017 7.9688 11.125-0.00005 0.007-0.00024 0.0289 0 0.0312 0.0568 0.44036 0.93536 5.2424-0.4375 7.1875-1.1141 3.4742-15.424 14.759-16.438 15.438-0.0112 0.0112-0.0829 0.0519-0.0937 0.0625-0.006 0.006-0.0259 0.026-0.0312 0.0312-0.003 0.002-0.0246 0.0245-0.0312 0.0312-0.003 0.003-0.0284 0.028-0.0312 0.0312-0.003 0-0.0278 0.00017-0.0312 0-0.002-0.00007-0.0241-0.00011-0.0312 0-0.006-0.005-0.0257-0.0254-0.0312-0.0312 0.00024-0.003-0.00007-0.0284 0-0.0312-0.006-0.0108-0.0256-0.0512-0.0312-0.0625-0.0431-0.28175 0.0326-0.99908 0-2.1562-0.094-2.1144 0.78114-6.8979 0.71875-7.7188 0.00003-0.003-0.00009-0.0281 0-0.0312-0.006-0.006-0.0254-0.0257-0.0312-0.0312 0.00004-0.003-0.00016-0.0278 0-0.0312-0.007 0.00014-0.0302 0.00009-0.0312 0-4.7302 3.0541-6.2924 12.416-7.1562 15.188-11.975 8.2741-25.574 14.43-33.406 22.812-4.0791 6.3702 28.104-7.3147 31.844-8.9688 0.0321 0.0241 0.0641 0.063 0.0937 0.0937 0.71089 0.78237 0.77161 3.5103 2.9062 5.9688 3.3453 4.5317 10.456 7.3224 17.375 5.5938 11.603-4.194 18.288-12.102 25.094-20.875 0.97266-1.4151 2.4972-2.5301 3.9062-1.4375 4.6768 10.47 18.161 17.92 35.594 18.688 4.0338-4.9056 2.1046-7.3177 0.46875-8.3438-0.50391-0.33487-8.6698-3.5184-9.9375-6.6875-0.79829-2.9492 1.1426-5.5648 5.0312-7.5312 11.193-1.3537 22.196-2.8573 32.844-6.2812 0.10784-3.5772 2.2149-8.9267 3.625-11.25 0.97909-1.612 1.6086-1.7716 1.8438-2 0.008-0.008 0.0246-0.023 0.0312-0.0312 0.003-0.004 0.0284-0.0269 0.0312-0.0312 0.006-0.005 0.0256-0.0257 0.0312-0.0312 0.00002-0.0107 0.00042-0.0514 0-0.0625 0.006-0.0708-0.00049-0.19272-0.0312-0.3125l-1.8125-1.0625-35.719-0.15625c-0.44124-0.16987-0.76931-0.34037-0.96875-0.5-0.0152-0.0127-0.0489-0.0499-0.0625-0.0625-0.006-0.006-0.0253-0.025-0.0312-0.0312-0.006-0.006-0.0261-0.0251-0.0312-0.0312-0.005-0.0109-0.0263-0.0516-0.0312-0.0625-0.003-0.003-0.0277-0.0279-0.0312-0.0312 0.00006-0.003-0.00029-0.0279 0-0.0312-0.003-0.003-0.0276-0.0279-0.0312-0.0312 0.00002-0.003-0.00018-0.0279 0-0.0312 0.00001-0.003-0.00013-0.0279 0-0.0312 0-0.003-0.00008-0.0279 0-0.0312-0.00033-0.005 0.00012-0.0265 0-0.0312 0.00013-0.002 0.00009-0.0246 0-0.0312-0.00005-0.003 0.0001-0.0279 0-0.0312-0.00006-0.003 0.00014-0.0279 0-0.0312-0.00007-0.003 0.00019-0.0279 0-0.0312 0.006-0.006 0.0254-0.0256 0.0312-0.0312 0.008-0.0165 0.0204-0.0462 0.0312-0.0625 0.17439-0.23501 0.59702-0.45652 1.125-0.65625 8.5292-1.1621 23.682-3.646 24.688-18.219-0.15724-7.5908-3.2482-12.561-12.562-13.938-6.8439 0.52918-11.725 7.1491-10.938 14.438-0.32757 1.9624 0.66406 5.8136-1.3438 6.25-13.128 1.1994-27.457 9.4251-27.938 15.312-0.003-0.00052-0.0285 0.00014-0.0312 0-0.005 0.006-0.0258 0.0256-0.0312 0.0312-0.0101 0.005-0.046 0.0231-0.0625 0.0312-0.0109-0.00015-0.0515 0.0004-0.0625 0-0.0211 0.007-0.0722 0.0257-0.0937 0.0312-0.006 0.00054-0.0232-0.00011-0.0312 0-0.0178-0.00028-0.0507 0-0.0625 0-0.006-0.00019-0.0232-0.0002-0.0312 0-0.0132 0.00033-0.0516 0.00053-0.0625 0-0.0339-0.007-0.0956-0.0238-0.125-0.0312-0.85384-0.23714-1.9538-1.6462-1.7812-3.625-0.49994-10.177-3.8122-21.693-9-30.562-1.8513-1.8508-2.6579-2.6008-3.1875-2.6875-0.0171-0.002-0.0459 0.0008-0.0625 0-0.0218-0.00009-0.0656 0.00025-0.0937 0-0.005 0.00014-0.0264-0.0004-0.0312 0-0.003-0.00009-0.0283 0.00025-0.0312 0-0.004 0.001-0.0274-0.001-0.0312 0zm34.188 5.375c-0.7426 0.12864-1.4592 0.74055-1.7188 1.75-0.16327 0.66121 0.31746 1.7611-0.28125 2.0938-0.34371 0.34673-1.6794 0.14493-1.625-1.6875 0-0.58359-0.42846-1.2238-0.6875-1.5938-0.26004-0.17034-0.40429-0.21875-0.875-0.21875-0.57352 0.0232-0.59178 0.17445-0.90625 0.65625-0.13306 0.49085-0.3125 0.97487-0.3125 1.5312-0.0716 0.65214-0.30147 0.873-0.78125 0.96875-0.53623 0-0.40933 0.0584-0.84375-0.21875-0.25803-0.28222-0.59375-0.3932-0.59375-0.875-0.00001-0.49893-0.0998-1.2954-0.25-1.625-0.22779-0.30036-0.61901-0.42542-1.0312-0.53125-2.2467 0.008-2.379 2.5586-2.25 3.5312-0.16833 0.18345-0.28288 4.7905 2.7812 6.0625 4.1134 1.9614 13.916 0.80665 11.531-5.5312-0.00001-0.58662-0.16029-2.5565-0.21875-3.0938-0.4198-0.9777-1.1949-1.3474-1.9375-1.2188zm137.97 5.6562c-0.1034-0.0186-0.22236-0.0114-0.34375 0.0312 0 0-19.059 13.559-19.531 14.031-1.8899 1.6802-0.94442 7.5886 0 6.9062 1.3658 0.52513 20.554-12.478 20.188-14 0.83627 0.0491 1.2385-6.6892-0.3125-6.9688zm-119.96 2.01c0.77787-0.0825 1.7982 0.18143 2.7812 0.75 1.4228 0.82293 2.2998 2.0657 2.1875 2.9688-0.004 0.0245 0.005 0.0698 0 0.0937-0.006 0.0238-0.0554 0.0705-0.0625 0.0937-0.008 0.023-0.0221 0.0713-0.0312 0.0937-0.006 0.0148-0.0241 0.048-0.0312 0.0625-0.007 0.0144-0.0231 0.0484-0.0312 0.0625-0.0466 0.0763-0.12358 0.15638-0.1875 0.21875-0.68395 0.63877-2.2626 0.54784-3.75-0.3125-1.4098-0.81544-2.281-2.068-2.1875-2.9688 0.003-0.0246 0.0267-0.0696 0.0312-0.0937 0.0236-0.11178 0.0679-0.21374 0.125-0.3125 0.0204-0.0353 0.0384-0.0926 0.0625-0.125 0.005-0.006 0.0261-0.025 0.0312-0.0312 0.042-0.049 0.10547-0.11459 0.15625-0.15625 0.22671-0.17829 0.54802-0.30575 0.90625-0.34375zm-166.91 3.4375c-9.8758 0.18043-24.338 12.945-24.719 20.031 10.421-5.0044 20.657-9.8212 31.25-15-1.7095-2.5521-0.10363-4.8518-6.5312-5.0312zm32 4.4375c0.96809 0.0109 1.9891 0.48893 2.5312 1.8438 0.48784 1.2428 0.0231 2.5424-0.5625 3.1875-0.003 0.005 0.003 0.0263 0 0.0312-0.009 0.0144-0.0215 0.049-0.0312 0.0625-0.4145 0.53404-1.8697 0.3125-2.9062 0.3125-1.2539-0.0554-1.8721-0.26122-2.625-1.2812-0.35982-1.1339 0.73594-2.2481 1.2188-3.0938 0.005-0.008 0.0263-0.0234 0.0312-0.0312 0.0524-0.0788 0.13801-0.17326 0.21875-0.25 0.375-0.34347 1.0235-0.66453 1.7188-0.75 0.13519-0.0166 0.26795-0.0328 0.40625-0.0312zm251.16 3.93c-1.756 0.21654-3.4252 1.877-2.6562 4.5312-0.4818 1.5593 2.3822 7.0115 3.125 9.9062 0.66827 2.0602-0.86071 7.8872 0.53125 8.5 1.2811 0.68641 4.6502-3.4593 4.5312-8.6562 0.37092-2.672-0.95304-12.517-4.3125-14.188-0.38629-0.10791-0.81353-0.14372-1.2188-0.0937zm-213.31 9.625c-1.552 0.10848-2.9369 0.93803-2.3125 3.125-0.0937 1.5865 4.3851 3.5156 4.6562 7.1875 0.64004 1.5139-0.9575 6.362 0.375 6.8125 1.2236 0.50396 2.9215-3.3513 3.5625-6.9375 0.35479-1.9645-1.5367-8.8358-4.75-10.062-0.49313-0.10609-1.0139-0.16116-1.5312-0.125zm63.844 8.7188c0.11777-0.008 0.22161 0.00072 0.34375 0 0.0205-0.00013 0.0419-0.00009 0.0625 0 3.9793 1.0815 9.8454 1.1936 14.938 1.7188 4.1477 0.26307 6.1971 3.5103 2.3125 4.875-3.8322 1.3124-7.5141 2.3374-7.5312 7.875 0.50376 2.7431 0.39705 4.1826-0.0312 4.8438-0.0335 0.0496-0.0878 0.11552-0.125 0.15625-0.005 0.006-0.0258 0.0258-0.0312 0.0312-0.006 0.005-0.0256 0.0261-0.0312 0.0312-0.006 0.005-0.0255 0.0265-0.0312 0.0312l-0.0312 0.0312c-0.011 0.005-0.0514 0.0259-0.0625 0.0312-0.0557 0.0346-0.12681 0.0715-0.1875 0.0937-0.0536 0.0182-0.1305 0.0217-0.1875 0.0312-0.91095 0.1336-2.234-0.73511-3.2188-1.25-2.3626-1.6964-8.9931-5.8056-9.9375-14.625-0.13438-1.9902 1.3554-3.7064 3.75-3.875zm-155.94 6.7812c-0.24858 0.008-0.74605 0.75061-1.4062 1.5938-5.8753 9.3597-6.3978 23.331-3.1562 27.5 1.7226 1.9695 4.5628 2.8356 6.6562 2.2188 3.6911-1.6006 5.3134-9.077 4.4375-11.812-1.2317-1.9282-2.2078-2.2337-3.4375-0.59375-2.5974 5.2735-3.6784 1.666-3.9062-1.2812-0.39814-5.589 0.14322-10.736 0.75-14.812 0.32304-2.089 0.31108-2.8203 0.0625-2.8125zm200.16 12.29c-0.43689-0.0234-0.90278 0.0449-1.375 0.28125-0.0927 0-4.2058 2.7815-5.5312 4.7188-0.80837 0.61485-0.71671 1.1493-0.46875 2.2188 0.62996 1.4484 1.7401 0.99386 3 0.3125 1.6722-0.2278 2.4808 0.8672 2.3438 2.875-0.77208 2.5037 0.34374 3.4365 0.34375 3.5938 0 0.15724 1.6101 1.5392 3.5 0.4375 3.9894-1.523 6.4755-3.0042 12.062-4.2188 1.4666-0.0292 1.3818-3.9536-0.9375-4.0938-3.0258 0.1522-5.8179 0.30676-8.8438 2.6875-1.8617 0.43039-2.1805-0.70275-2.5938-1.7188-0.47272-2.5208 1.0645-4.2976 0.75-6.1875 0.0839 0.0831-0.93932-0.83604-2.25-0.90625zm128.16 4.7812c-0.74222 0.0232-1.5238 0.12602-2.6562 0.21875-1.2246 0.26006-1.6522 0.79656-1.875 2.2812 0.0877 2.2517 1.4649 2.1402 2.875 3.0312 0.81645 1.0392 1.3476 1.98-0.0625 3.6875-1.3365 1.2246-2.2885 1.9004-3.625 3.125-0.631 1.0765-1.024 2.7299 0.90625 3.25 3.564 1.0019 11.812-4.3569 11.812-4.4688 1.3365-1.0019 0.89313-2.9062 0.78125-2.9062-0.77912-0.89102-2.5374-0.35586-3.7188-0.5-0.56244 0-2.4092-0.27339-1.5312-1.9062 0.73278-1.016 1.0031-1.6232 1.5-2.875 0.55638-1.2246 0.0673-2.0505-1.9375-2.7188-1.021-0.18546-1.7265-0.24193-2.4688-0.21875zm-53.54 108.4c-0.008 0.004-0.0234 0.0258-0.0312 0.0312-5.9277 1.521-5.7433 7.6749-1.9375 10.375-62.594 0-158.65-1.0625-179.25-1.0625-11.525 0-47.987-1.375-48.688-1.375 7.8196 11.437 19.147 13.766 33.969 14 27.802 0 156.62-0.34375 193.28-0.34375-2.6062 4.6275 0.23645 12.074 2.2812 13.438 0.0434 0.0279 0.11369 0.0715 0.15625 0.0937 0.0763 0.038 0.17693 0.0749 0.25 0.0937 0.0242 0.006 0.07-0.003 0.0937 0 2.4271 0.5725 3.4951-1.1846 4.3125-2.4688 3.9372 0.34703 26.097 0.66757 28.125-0.0312 0.007-0.003 0.0245-0.0284 0.0312-0.0312 1.3718 2.0189 2.7332 3.9264 5.3438 3.5938 4.569-0.97972 8.1674-1.477 8.2812-10.75 0 0-0.46704-15.802-10.844-14.812-2.4553 0.37092-9.3438 1.0625-9.3438 1.0625-7.9718-0.94847-13.819-1.0454-22.781-1.375 0.82723-1.0502 2.2878-5.3034 0.5-6.8438-0.46622-0.38767-1.1617-0.60352-2.125-0.53125-0.007 0.0005-0.0244-0.00008-0.0312 0-0.0136-0.00068-0.0492 0.002-0.0625 0-0.007-0.002-0.0248-0.0293-0.0312-0.0312-0.0257-0.009-0.0692-0.0161-0.0937-0.0312-0.0486-0.033-0.11173-0.10294-0.15625-0.15625-0.011-0.0139-0.0517-0.0475-0.0625-0.0625-0.45322-0.65987-0.70068-2.2777-1-2.6875-0.004-0.004-0.0277-0.0271-0.0312-0.0312-0.004-0.003-0.0276-0.0282-0.0312-0.0312-0.0109-0.007-0.0514-0.0277-0.0625-0.0312-0.004-0.00036-0.0275-0.00006-0.0312 0-0.004 0.00091-0.0274-0.001-0.0312 0zm4.25 22.594c0.0109-0.005 0.0202 0.005 0.0312 0 9.1319 0.44551 17.712 0.0857 26.844 0.53125 1.4473 1.2303 0.72345 4.0484-0.21875 4.5625-0.0422 0.0211-0.11339 0.051-0.15625 0.0625-0.0344 0.008-0.0905-0.001-0.125 0-0.0345-0.0007-0.0905 0.008-0.125 0-2.9694-0.0746-4.6869-0.14417-7.6562-0.21875-0.005-0.14772-0.0215-0.30707-0.0625-0.4375-0.70371-2.0856-5.8008-1.9461-7-0.3125-0.0166 0.0235-0.0475 0.0696-0.0625 0.0937-0.0192 0.0325-0.0463 0.0915-0.0625 0.125-0.0193 0.0422-0.0482 0.11238-0.0625 0.15625-0.0187 0.0619-0.0229 0.15372-0.0312 0.21875-0.008 0.0748-0.0379 0.17113-0.0312 0.25-4.0086 0.4818-7.6164-0.13309-11.625-0.28125-1.1761-1.4641-1.0388-4.1134 0.34375-4.75z" fill="#fff"/>
      </svg>
      </a>
    </li>
  </ul>
</div>
</div>
</nav>

