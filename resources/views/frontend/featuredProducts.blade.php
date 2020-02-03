<div uk-filter="target: .js-filter">


    <ul class="uk-subnav uk-subnav-pill">
        <li class="uk-active" uk-filter-control="sort: data-date"><a href="#">Ascending</a></li>
        <li uk-filter-control="sort: data-date; order: desc"><a href="#">Descending</a></li>
    </ul>

    <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>


        @foreach ($products_filter as $product_filter)

        <li class="headline" data-date="{{ $product_filter->created_at }}">
            <div class="uk-card uk-card-default uk-card-body uk-transition-toggle p-0" >
                <a title="{{ $product_filter->slug }}" href="{{ route('dates', $product_filter->slug, $product_filter->id) }}">
                    <div class="uk-overflow-hidden" >
                        <img class="img-fluid uk-transition-scale-up uk-transition-opaque" src="{{ secure_url('Products/'.$product_filter->image) }}" alt="dates_ghabane">
                    </div>
                </a>
            </div>
        </li>

        @endforeach


    </ul>

</div>
