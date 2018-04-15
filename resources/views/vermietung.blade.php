@extends('layout.master', compact('cart'))

@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin col_last">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="shop product-3 grid-container clearfix">
                        @foreach($shopItems as $shopItem)
                            <div class="product {{ str_replace(' ', '_', $shopItem['category']) }} clearfix">
                                <div class="product-image">
                                    <a href="{{ Route('shop_item', ['id' =>  $shopItem['id']]) }}" class="item-quick-view" data-lightbox="ajax"><img src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_1.jpg') }}" alt="{{ $shopItem['name'] }}"></a>
                                    @if(file_exists('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_2.jpg'))
                                        <a href="{{ Route('shop_item', ['id' =>  $shopItem['id']]) }}" class="item-quick-view" data-lightbox="ajax"><img src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $shopItem['name']). '_2.jpg') }}" alt="{{ $shopItem['name'] }}"></a>
                                    @endif
                                    {!! in_array($shopItem['id'], $itemsInCart) ? '<div class="sale-flash"><i class="icon-shopping-cart"></i></div>' : '' !!}
                                    <div class="product-overlay">

                                        <form method="POST" action="{{ Route('Vermietung') }}">
                                            <input type="hidden" name="shopItemId" value="{{$shopItem->id}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit">
                                                <i class="icon-shopping-cart"></i>
                                                <span>
                                                    {{ in_array($shopItem['id'], $itemsInCart) ? "Entfernen" : "Hinzufügen" }}
                                                </span>
                                            </button>
                                        </form>
                                        <a href="{{ Route('shop_item', ['id' =>  $shopItem['id']]) }}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Details </span></a>


                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="#">{{ $shopItem['name'] }}</a></h3></div>
                                    <div class="product-price"><ins>€{{ $shopItem['price'] }} / Tag</ins></div>
                                </div>
                            </div>
                        @endforeach

                    </div><!-- #shop end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin">
                    <div class="sidebar-widgets-wrap">



                        <div class="widget widget-filter-links clearfix">
                            <h4>Kategorie</h4>
                            <ul class="custom-filter" data-container="#shop" data-active-class="active-filter">
                                <li class="widget-filter-reset active-filter"><a href="#" data-filter="*">Alles</a></li>
                                <li><a href="#" data-filter=".Pakete">Pakete</a></li>
                                <li><a href="#" data-filter=".Anlage">Anlagen</a></li>
                                <li><a href="#" data-filter=".Beleuchtung">Beleuchtung</a></li>
                                <li><a href="#" data-filter=".DJ_Technik_und_Mixer">DJ Technik und Mixer</a></li>
                                <li><a href="#" data-filter=".Mikrofone">Mikrofone</a></li>
                            </ul>

                        </div>

                        <div class="widget widget-filter-links clearfix">

                            <h4>Sortieren</h4>
                            <ul class="shop-sorting">
                                <li class="widget-filter-reset active-filter"><a href="#" data-sort-by="original-order">Reset</a></li>
                                <li><a href="#" data-sort-by="name">Name</a></li>
                                <li><a href="#" data-sort-by="price_lh">Preis: aufsteigend</a></li>
                                <li><a href="#" data-sort-by="price_hl">Preis: absteigend</a></li>
                            </ul>

                        </div>

                        @if(Cart::count() > 0)
                            <div class="widget widget-filter-links clearfix">

                            <h4 class="center"><a href="{{ route('Einkaufswagen') }}">Zum Einkaufswagen</a></h4>
                        @endif

                    </div>
                </div><!-- .sidebar end -->

            </div>

        </div>

    </section>
@endsection