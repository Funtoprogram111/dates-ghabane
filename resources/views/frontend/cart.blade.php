@extends('layouts.frontend')


@section('navbar')
  @include('frontend.partials.__navbar')
@endsection


@section('content')

    <section class="section-hero pt-5 pt-4">
      <header>
        <div class="jumbotron text-center font-weight-light mt-5">
          <div class="text-block text-white">{{ Cart::count() }} products in our cart</div>
          <h1 class="display-3 text-uppercase text-white font-weight-bold text">your shopping cart</h1>
        </div>
      </header><!-- /header -->
    </section>


    <!-- Your Cart -->
    <section>
      <div class="container">
        <div class="row">
          <div class="container mb-4">
    <div class="row">
        <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
          @if (session('status'))
              <div class="uk-alert-success" uk-alert>
                  <a class="uk-alert-close" uk-close></a>
                  <p>{{ session('status') }}</p>
              </div>
          @endif
            <div class="uk-overflow-auto">
                <table class="text-center uk-table uk-table-hover uk-table-middle uk-table-divider font-weight-light">
                    <thead class="text-uppercase font-weight-light">
                        <tr>
                            <th class="uk-table-shrink" scope="col">#</th>
                            <th class="uk-table-expand" scope="col">Product</th>
                            <th class="uk-width-small" scope="col">Status</th>
                            <th class="uk-width-small" scope="col">Quantity</th>
                            <th class="uk-width-small" scope="col">Price</th>
                            <th class="uk-width-small">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                      @forelse ($cartItems as $cartItem)

                          <tr>
                              <td>

                                <img width="50px" class="uk-preserve-width uk-border-circle" src="<?php echo ($cartItem->options->has('image') ? $cartItem->options->image : '');?>" alt="dates_ghabane"/>

                              </td>
                              <td>{{ $cartItem->name }}</td>
                              <td>
                                <i class="status fas fa-circle mr-1 text-success" style="font-size: 8px !important;"></i>
                              </td>
                              <td>
                                <form class="d-flex" action="{{ secure_url('/cart/update-Item', $cartItem->rowId) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <input class="form-control" name="qty" type="number" value="{{ $cartItem->qty }}"/>
                                <button type="submit" class="refresh btn btn-sm btn-secondary">
                                    <i class="fa fa-sync"></i>
                                  </button>
                                </form>
                              </td>
                              <td>{{ $cartItem->price }}</td>
                              <td>
                                <form action="{{ secure_url('/cart/delete-Item', $cartItem->rowId) }}" method="post">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}
                                  <button type="submit" class="remove btn btn-sm btn-danger">
                                    <i class="fas fa-times-circle"></i>
                                  </button>
                               </form>
                              </td>
                          </tr>


                      @empty
                        <tr>
                          <td colspan="6">
                            <p>No cart item selected !</p>
                          </td>
                        </tr>


                      @endforelse

                        <tr>
                            <td colspan="5" class="text-center">Sub-Total</td>
                            <td class="text-center">{{ Cart::subtotal() }}<i class="ml-1 fas fa-dollar-sign"></i></td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-center">Shipping</td>
                            <td class="text-center">6,90<i class="ml-1 fas fa-dollar-sign"></i></td>
                        </tr>
                        <tr>
                            <td colspan="5"><strong class="font-weight-bold">Total</strong></td>
                            <td class="text-center font-weight-bold">{{ Cart::total() }}<strong><i class="ml-1 fas fa-dollar-sign"></i></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                  <form style="display: :none;" method="get" action="{{ secure_url('/#OurProducts') }}">
                    {{ csrf_field() }}
                    <button class="btn btn-warning btn-block font-weight-light text-uppercase"><i class="fas fa-shopping-basket mr-1"></i></i>Continue Shopping</button>
                  </form>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 text-right">
                  @if (Cart::count() == 0)

                    <form style="display: :none;" method="get" action="{{ secure_url('/checkout/shipping_info') }}">
                      {{ csrf_field() }}
                      <button disabled="disabled" class="btn btn-warning btn-block font-weight-light text-uppercase"><i class="fas fa-check mr-1"></i>Checkout</button>
                    </form>

                  @else

                  <form style="display: :none;" method="get" action="{{ secure_url('/checkout/shipping_info') }}">
                      {{ csrf_field() }}
                      <button class="btn btn-warning btn-block font-weight-light text-uppercase"><i class="fas fa-check mr-1"></i>Checkout</button>
                  </form>

                  @endif

                </div>
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </section>

@endsection
