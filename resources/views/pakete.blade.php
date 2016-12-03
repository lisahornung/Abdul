@extends('layout.master')

@section('content')
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">
                <div class="heading-block center">
                    <h2>Technik Pakete</h2>
                    <span>Günstige Anlagen und Beleuchtung.</span>
                </div>
                <div class="pricing bottommargin clearfix">

                    <div class="col-md-3">
                        <div class="pricing-box">
                            <div class="pricing-title">
                                <h3>Fohhn 2</h3>
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">&euro;</span>100<span class="price-tenure"></span>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li><strong>Fohhn 2</strong> Anlage</li>
                                    <li>Mischpult</li>
                                    <li>Lauflicht</li>
                                    <li><strong>100</strong> Personen</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a href="{{ Route('shop_item', ['id' =>  1]) }}" class="btn  btn-block btn-lg item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Infos </span></a>

                                <a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Fohhn 2" data-service="Preise">In den Einkaufswagen</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="pricing-box best-price">
                            <div class="pricing-title">
                                <h3>Bose</h3>
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">&euro;</span>80<span class="price-tenure"></span>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li><strong>Bose</strong> Anlage</li>
                                    <li>Mischpult</li>
                                    <li>Lauflicht</li>
                                    <li><strong>80</strong> Personen</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a href="{{ Route('shop_item', ['id' =>  1]) }}" class="btn  btn-block btn-lg item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Infos </span></a>

                                <a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Fohhn 2" data-service="Preise">In den Einkaufswagen</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="pricing-box">
                            <div class="pricing-title">
                                <h3>Fohhn 3</h3>
                            </div>
                            <div class="pricing-price best-price">
                                <span class="price-unit">&euro;</span>150<span class="price-tenure"></span>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li><strong>Fohhn 3</strong> Anlage</li>
                                    <li>Mischpult</li>
                                    <li>Lauflicht</li>
                                    <li><strong>150</strong> Personen</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a href="{{ Route('shop_item', ['id' =>  1]) }}" class="btn  btn-block btn-lg item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Infos </span></a>

                                <a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Fohhn 2" data-service="Preise">In den Einkaufswagen</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="pricing-box">
                            <div class="pricing-title">
                                <h3>White Wedding</h3>
                            </div>
                            <div class="pricing-price best-price">
                                <span class="price-unit">&euro;</span>150<span class="price-tenure"></span>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li><strong>Fohhn 2</strong> Anlage (white)</li>
                                    <li>Mischpult</li>
                                    <li>Lauflicht + <strong>6x LED Raumausleuchtung</strong></li>
                                    <li><strong>80</strong> Personen</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a href="{{ Route('shop_item', ['id' =>  1]) }}" class="btn  btn-block btn-lg item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Infos </span></a>

                                <a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Fohhn 2" data-service="Preise">In den Einkaufswagen</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="content-wrap">
            <div class="container clearfix">
                <div class="heading-block center">
                    <h2>DJ Pakete</h2>
                    <span>Das rundum Sorglospaket.</span>
                </div>
                <div class="pricing bottommargin clearfix">

                    <div class="col-md-4">
                        <div class="pricing-box">
                            <div class="pricing-title">
                                <h3>Starter</h3>
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">&euro;</span>500<span class="price-tenure"></span>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li><strong>Bose</strong> Anlage</li>
                                    <li><strong>DJ</strong></li>
                                    <li>Partybeleuchtung</li>
                                    <li><strike>Raumausleuchtung</strike></li>
                                    <li><strong>< 100</strong> Personen</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a data-toggle="modal" data-target="#buchen" class="btn  btn-block btn-lg" data-name="Fohhn 2" data-service="Preise"><i class="icon-info" style=" margin-right: 3px"></i> Infos</a>

                                <a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Fohhn 2" data-service="Preise">In den Einkaufswagen</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="pricing-box best-price">
                            <div class="pricing-title">
                                <h3>All-in-One</h3>
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">&euro;</span>750<span class="price-tenure"></span>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li><strong>Fohhn 2</strong> Anlage</li>
                                    <li><strong>DJ</strong></li>
                                    <li>Partybeleuchtung</li>
                                    <li>Raumausleuchtung</li>
                                    <li><strong>100 - 150</strong> Personen</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a data-toggle="modal" data-target="#buchen" class="btn  btn-block btn-lg" data-name="Fohhn 2" data-service="Preise"><i class="icon-info" style=" margin-right: 3px"></i> Infos</a>

                                <a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Fohhn 2" data-service="Preise">In den Einkaufswagen</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="pricing-box">
                            <div class="pricing-title">
                                <h3>Professional</h3>
                            </div>
                            <div class="pricing-price best-price">
                                <span class="price-unit">&euro;</span>1000<span class="price-tenure"></span>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li><strong>Fohhn 3</strong> Anlage</li>
                                    <li><strong>DJ</strong></li>
                                    <li>Partybeleuchtung</li>
                                    <li>Raumausleuchtung</li>
                                    <li><strong>> 150</strong> Personen</li>
                                </ul>
                            </div>
                            <div class="pricing-action">
                                <a data-toggle="modal" data-target="#buchen" class="btn  btn-block btn-lg" data-name="Fohhn 2" data-service="Preise"><i class="icon-info" style=" margin-right: 3px"></i> Infos</a>

                                <a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Fohhn 2" data-service="Preise">In den Einkaufswagen</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="buchen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Paket - Bose</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-6"><img src="img/vermietung/shop/bosePaket.jpg"/></div>
                                <div class="col-md-6 col-md-offset-6">
                                    <div class="col_half nobottommargin col_last product-desc">
                                        <div class="product-price">Preis: <ins>€ 80 / Tag</ins></div>
                                        <div class="clear"></div>
                                        <div class="line"></div>

                                        <!-- Product Single - Quantity & Cart Button
                                        ============================================= -->
                                        <form class="cart nobottommargin clearfix" method="post" action="{{ Route('Vermietung') }}">
                                            <input type="hidden" name="shopItemId" value="1">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="add-to-cart button nomargin">
                                                In den Einkaufswagen
                                            </button>
                                        </form><!-- Product Single - Quantity & Cart Button End -->

                                        <div class="clear"></div>
                                        <div class="line"></div>
                                        <p>Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
                                        <ul class="iconlist">
                                            <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                                            <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                                            <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                                        </ul>
                                        <div class="panel panel-default product-meta nobottommargin">
                                            <div class="panel-body">
                                                <span itemprop="productID" class="sku_wrapper">ID: <span class="sku">1</span></span>
                                                <span class="posted_in">Category: <a href="#" rel="tag"> Technik Paket </a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zurück</button>
                            <button class="button button-3d nomargin"   data-dismiss="modal" onclick="$('#template-contactform').submit()">In den Einkaufswagen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection