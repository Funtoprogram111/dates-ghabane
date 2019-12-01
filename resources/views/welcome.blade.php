@extends('layouts.frontend')

@section('navbar')
 @include('frontend.partials._navbar')
@endsection

@section('content')

  <section class="section-hero pt-5 pt-4" id="home">
    <header>
      <div id="jumbotron" class="jumbotron text-center font-weight-light mt-5">
        <div class="text-block text-white font-weight-light">DON'T MISS OUT ON THE LATEST</div>
        <h1 id="introtxt" class="display-5 text-uppercase text-white"></h1>
        <p class="font-weight-light text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </header><!-- /header -->
  </section>

  <section id="aboutUs">
    <div class="container mt-4">
      <h1 class="headline text-center text-uppercase font-weight-light">about us</h1>
      <div class="div-block w-100 mb-2">
        <div class="headline text-block text-lowercase">about us</div>
      </div>
      <div class="row justify-content-center">
        @include('frontend.aboutUs')
      </div>
    </div>
  </section>



  <section id="OurProducts">
    <div class="container mt-4">
      <h1 class="h-custom text-center text-uppercase font-weight-light">
        <span class="headline h-custom-headline">our products</span>
      </h1>
      <div class="div-block w-100 mb-2">
        <div class="text-block text-lowercase">
          {{ $products->total() }} products
        </div>
      </div>
      <div class="fetch-products row mt-4">
        @include('frontend.products')
      </div>
      <div class="col text-center">
        {{ $products->links('vendor.pagination.bootstrap-4') }}
      </div>
    </div>
  </section>



  <section>
    <div class="container mt-4">
      <h1 class="h-custom text-center text-uppercase font-weight-light">
        <span class="headline h-custom-headline">OUR featured products</h1></span>
      <div class="div-block w-100 mb-2">
        <div class="headline text-block text-lowercase">the latest products order by date</div>
      </div>
      <div class="row mt-4">
        @include('frontend.featuredProducts')
      </div>
    </div>
  </section>

  <section id="contactUs">
    <div class="container mt-4">
      <h1 class="h-custom text-center text-uppercase font-weight-light">
        <span class="headline h-custom-headline">contact us</h1></span>
      <div class="div-block w-100 mb-2">
        <div class="headline text-block text-lowercase">Please email us your questions regarding our products.</div>
      </div>
      <div class="row mt-4">
        @include('frontend.contactUs')
      </div>
    </div>
  </section>




@endsection


