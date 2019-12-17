@extends('layouts.frontend')


@section('navbar')
  @include('frontend.partials.__navbar')
@endsection


@section('content')

    <!-- Section hero -->
    <section class="section-hero pt-5 pt-4">
      <header>
        <div class="jumbotron text-center font-weight-light mt-5">
          <div class="text-block text-white">{{ $product->category->name }}</div>
          <h1 class="display-3 text-uppercase text-white font-weight-bold text">{{ $product->name }}</h1>
        </div>
      </header><!-- /header -->
    </section>

    <!-- Product details -->
    <section>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
              <div class="card bg-light mb-3">
                <div class="card-header font-weight-light text-left">#image</div>
                <div class="card-body p-0">
                  <a title="{{ $product->slug }}" href="{{ secure_asset($product->image) }}">
                    <img class="img-fluid" src="{{ secure_asset($product->image) }}" alt="dates_ghabane">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
            @if (session('status'))
              <div class="uk-alert-success" uk-alert>
                  <a class="uk-alert-close" uk-close></a>
                  <p>{{ session('status') }}</p>
              </div>
            @endif
              <div class="card bg-light mb-3">
                <div class="card-header font-weight-light text-left">#details</div>
                <div class="card-body">
                  <div class="text-uppercase font-weight-light text-small"><mark>{{ $product->category->name }}</mark></div>
                  <h4 class="display-5 font-weight-bold text-capitalize mt-2">{{ $product->name }}</h4>
                  <div class="text-small text-lowercase">
                    <i class="status text-success fas fa-info-circle mr-1"></i>this product is available in our stock
                  </div>
                  <div class="price mt-2">
                    <em class="font-weight-bold mr-1">{{ $product->price }}</em><sub class="font-weight-light"><i class="ml-1 fas fa-dollar-sign mr-1"></i>HT</sub>
                  </div>
                  <p class="card-text font-weight-light text-justify">
                    {!! $product->description !!}
                  </p>
                  <div class="d-flex col-xs-12">
                      <a href="{{ route('cart.addItem', $product->id) }}" title="{{ $product->name }}">
                        <button class="uk-button uk-button-secondary font-weight-light text-uppercase"><i class="fa fa-cart-plus mr-1"></i>add to cart</button>
                      </a>
                      <?php $count = App\Models\Wishlist::where(['product_id' => $product->id])->count(); ?>
                      @if ($count == 0)

                        <form action="{{ secure_url('/add-item-to-wishlist') }}">
                          <input type="hidden" name="product_id" value="{{ $product->id }}">
                          <button type="submit" class="ml-2 uk-button uk-button-primary font-weight-light text-uppercase"><i class="far fa-heart mr-1"></i>add to wishlist</button>
                          {{ csrf_field() }}
                        </form>
                        <button class="uk-button uk-button-default font-weight-light text-uppercase" disabled>{{ $count }}</button>

                      @else

                        <button class="uk-button uk-button-default font-weight-light text-uppercase" disabled><i class="fas fa-heart mr-1"></i>Already added to wishlist</button>

                      @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <section>

      <div class="container mt-4">

        <h1 class="text-center text-uppercase font-weight-light">view our products</h1>
        <div class="div-block w-100 mb-2">
          <div class="text-block text-lowercase">the random products</div>
        </div>

        <div class="mt-4 mb-4" uk-slider="center: true">

          <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true">

              <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                @foreach ($randomProducts as $random)

                  <li>
                    <div class="uk-animation-toggle" tabindex="0">
                      <div class="uk-card uk-card-default uk-animation-fade">
                          <div class="uk-card-media-top">
                              <a class="uk-thumbnail" href="{{ route('dates', $product->slug, $product->id) }}" title="{{ $random->slug }}">
                                <img class="img-fluid" src="{{ secure_asset($random->image) }}" alt="dates_ghabane">
                                <div class="uk-position-center uk-panel text-center font-weight-bold text-lg">
                                </div>
                              </a>
                          </div>
                      </div>
                    </div>
                  </li>

                @endforeach

              </ul>

              <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
              <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

          </div>

        </div>

      </div>
    </section>

@endsection
