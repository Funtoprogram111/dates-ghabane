
  @foreach($products as $prod)

    <div class="headline col-lg-3 col-md-4 col-sm-12 col-xs-12">
        <a title="{{ $prod->slug }}" href="{{ route('dates', $prod->slug, $prod->id) }}" class="product-thumbnail">
          <div class="image-wrapper">
              <div class="addToCart">
                <form style="z-index: 9999; position: relative;" method="get" action="{{ secure_url('/cart/add-item', $prod->id) }}">
                  <button type="submit" class="btn btn-warning btn-xs">
                    <i class="material-icons">add_shopping_cart</i>
                  </button>
                  {{ csrf_field() }}
                </form>
              </div>
            <img class="img-fluid" src="{{ secure_url('Products/'.$prod->image) }}" alt="dates_ghabane">
          </div>
          <div class="thumbnail-text mt-3 pr-2 pl-2">
            <div class="card-toptext">
              <div id="category-tag" class="category-tag">{{ $prod->categories_name }}</div>
              <div class="product-title">

                  <i class="status fas fa-circle mr-1 text-success" style="font-size: 8px !important;"></i>

                  {{ str_limit($prod->name , $limit = 25, $end = '...')}}
              </div>
              <div class="product-description text-justify">
                {!! str_limit($prod->description, $limit = 120, $end = '...') !!}
              </div>
              <div class="product-details pt-2 py-2 d-flex justify-content-between">
                  <div>
                    <i class="fas fa-money-bill mr-1"></i>{{ $prod->price }}<i class="ml-1 fas fa-dollar-sign"></i>
                  </div>
                  <div>
                    <i class="far fa-clock mr-1"></i>Added in {{ \Carbon\Carbon::parse($prod->created_at)->diffForHumans() }}
                  </div>
              </div>
            </div>
          </div>
        </a>
    </div>

  @endforeach



