<div class="single-product shop-quick-view-ajax clearfix">

    <div class="ajax-modal-title">
        <h2>{{ $shopItem['name'] }}</h2>
    </div>

    <div class="product modal-padding clearfix">

        <div class="col_half nobottommargin">
            <div class="product-image">
                <div class="fslider" data-pagi="false">
                    <div class="flexslider">
                        @if(file_exists('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_2.jpg'))
                            <div class="slider-wrap">
                                <div class="slide"><a href="#" title="{{ $shopItem['name'] }}"><img src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_1.jpg') }}" alt="{{ $shopItem['name'] }}"></a></div>
                                <div class="slide"><a href="#" title="{{ $shopItem['name'] }}"><img src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_2.jpg') }}" alt="{{ $shopItem['name'] }}"></a></div>
                                @if(file_exists('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_3.jpg'))
                                    <div class="slide"><a href="#" title="{{ $shopItem['name'] }}"><img src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_3.jpg') }}" alt="{{ $shopItem['name'] }}"></a></div>
                                @endif
                                @if(file_exists('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_4.jpg'))
                                    <div class="slide"><a href="#" title="{{ $shopItem['name'] }}"><img src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_4.jpg') }}" alt="{{ $shopItem['name'] }}"></a></div>
                                @endif
                            </div>
                        @else
                            <div class="slide"><a href="#" title="{{ $shopItem['name'] }}"><img src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_1.jpg') }}" alt="{{ $shopItem['name'] }}"></a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col_half nobottommargin col_last product-desc">
            <div class="product-price">Preis: <ins>€ {{$shopItem['price'] }} / Tag</ins></div>
            <div class="clear"></div>
            <div class="line"></div>

            <!-- Product Single - Quantity & Cart Button
            ============================================= -->
            <form class="cart nobottommargin clearfix" method="post" action="{{ Route('Vermietung') }}">
                <input type="hidden" name="shopItemId" value="{{$shopItem['id']}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="add-to-cart button nomargin">
                    {{ !in_array($shopItem['id'], $itemsInCart) ?  "In den Warenkorb" : "Vom Warenkorb Entfernen" }}
                </button>
            </form><!-- Product Single - Quantity & Cart Button End -->

            <div class="clear"></div>
            <div class="line"></div>
            <p>{!! $shopItem['description'] !!}</p>
            <ul class="iconlist">
                {!! $shopItem['properties'] !!}
            </ul>
            <div class="panel panel-default product-meta nobottommargin">
                <div class="panel-body">
                    <span itemprop="productID" class="sku_wrapper">ID: <span class="sku">{{ $shopItem['id'] }}</span></span>
                    <span class="posted_in">Category: <a href="#" rel="tag"> {{ $shopItem['category'] }} </a></span>
                </div>
            </div>
        </div>

    </div>

</div>