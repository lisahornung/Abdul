@extends('layout.master');

@section('content')
    <section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <div class="heading-block center">
                <h2>Warenkorb</h2>
            </div>
            @if (sizeof(Cart::content()) > 0)
                <form method="post" id="einkaufswagenForm" action="{{ route('Bestellung') }}">
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-md-12">
                                <div class="col_one_third">
                                    <label for="name">Vorname<small>*</small>:</label>
                                    <input type="text" id="name" name="name" value="{{isset($order->name) ? $order->name : ''}}" class="sm-form-control" required />
                                </div>

                                <div class="col_one_third">
                                    <label for="lastname">Nachname:</label>
                                    <input type="text" id="lastname" name="lastname" value="{{isset($order->lastname) ? $order->lastname : ''}}" class="sm-form-control" required/>
                                </div>

                                <div class="col_one_third col_last">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" value="{{isset($order->email) ? $order->email : ''}}" class="sm-form-control" required/>
                                </div>

                                <div class="clear"></div>

                                <div class="col_one_third">
                                    <label for="street">Straße mit Hausnummer:</label>
                                    <input type="text" id="street" name="street" value="{{isset($order->street) ? $order->street : ''}}" class="sm-form-control" />
                                </div>

                                <div class="col_one_third">
                                    <label for="postcode">Postleitzahl:</label>
                                    <input type="text" id="postcode" name="postcode" value="{{isset($order->postcode) ? $order->postcode : ''}}" class="sm-form-control" />
                                </div>

                                <div class="col_one_third col_last">
                                    <label for="city">Stadt:</label>
                                    <input type="text" id="city" name="city" value="{{isset($order->city) ? $order->city : ''}}" class="sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_one_third">
                                    <label for="company">Firma:</label>
                                    <input type="text" id="company" name="company" value="{{isset($order->company) ? $order->company : ''}}" class="sm-form-control" />
                                </div>

                                <div class="col_one_third">
                                    <label for="telephone">Telefon:</label>
                                    <input type="text" id="telephone" name="telephone" value="{{isset($order->telephone) ? $order->telephone : ''}}" class="sm-form-control" required />
                                </div>

                                <div class="col_one_third col_last">
                                    <label>Zeitraum:</label>
                                    <input type="text" class="daterange4 sm-form-control" name="period" value="{{isset($order->period) ? $order->period : ''}}" required/>
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="comment">Anmerkung <small>*</small></label>
                                    <textarea class="sm-form-control" id="comment" name="comment" rows="6" cols="30">{{isset($order->comment) ? $order->comment : ''}}</textarea>
                                </div>
                        </div>
                        <div class="clear bottommargin"></div>
                        <div class="col-md-6">
                            <div class="table-responsive clearfix">
                                <h4>Ihre Bestellung</h4>

                                <table class="table cart">
                                    <thead>
                                    <tr>
                                        <th class="cart-product-action">Aktion</th>
                                        <th class="cart-product-thumbnail">Bild</th>
                                        <th class="cart-product-name">Name</th>
                                        <th class="cart-product-subtotal">Preis</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::content() as $item)
                                            <tr class="cart_item">
                                                <td class="cart-product-action">
                                                    <button name="action" value="{{$item->id}}" type="submit" class="cancel deleteItemBtn"><i class="icon-trash" aria-hidden="true"></i> Entfernen</button>
                                                </td>

                                                <td class="cart-product-thumbnail">
                                                    <a href="#"><img width="64" height="64" src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $item->name). '_1.jpg') }}" alt="{{ $item->name }} "></a>
                                                </td>

                                                <td class="cart-product-name">
                                                    <a href="#">{{ $item->name }}</a>
                                                </td>

                                                <td class="cart-product-subtotal">
                                                    <span class="amount">€{{ $item->price }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="cart_item">
                                            <td></td><td></td>
                                            <td class="cart-product-name">
                                                <strong>Umsatzsteuer (19%)</strong>
                                            </td>

                                            <td class="cart-product-subtotal">
                                                <span class="amount">€{{ Cart::tax() }}</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="notopborder"></td><td class="notopborder"></td>
                                            <td class=" cart-product-name">
                                                <strong>Gesamt</strong>
                                            </td>
                                            <td class=" cart-product-subtotal">
                                                <span class="amount color lead"><strong>€{{ Cart::total() }}</strong></span>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <h4>Infos</h4>
                            </div>
                            <div class="accordion clearfix">
                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-ok-circle"></i>Völlig Unverbindlich</div>
                                <div class="acc_content clearfix">Wir kontaktieren und beraten Sie nach Ihrer Anfrage um die letzten Details persönlich zu klären.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-ok-circle"></i>Verfügbarkeit</div>
                                <div class="acc_content clearfix">Die Verfügbarkeit der von Ihnen gewünschten Produkte wird binnen der nächsten 1-2 Tage geprüft und bestätigt.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-ok-circle"></i>Aufbau / Abholung</div>
                                <div class="acc_content clearfix">Die von Ihnen gewünschten Produkte können von Ihnen nach Absprache abgeholt oder von mir gegen Aufpreis geliefert und angeschlossen werden.</div>

                                <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-ok-circle"></i>Bezahlung</div>
                                <div class="acc_content clearfix">Nach Bestätigung der Verfügbarkeit und Absprache des Aufbaus / der Abholung erhalten Sie eine Rechnung und können den ausstehenden Betrag auf den in der Rechnung befindlichen Kontonummer überweisen oder bei Abholung in Bar bezahlen.</div>
                            </div>
                            <input type="submit" id="template-contactform-submit" name="action" value="Anfragen" class="button button-3d fright" />
                        </div>
                    </div>
                </form>
            @else
                <div class="section notopmargin nobottommargin clearfix">
                    <div class="container clearfix">
                        <div class="heading-block center nobottomborder nobottommargin">
                            <h2 class="t500 nott" style="font-size: 36px;">Leerer Warenkorb</h2>
                            <span style="color: #BBB;">Fügen Sie ein paar Produkte in  <span class="t400"><a href="{{  route('Vermietung') }}">Vermietung</a> hinzu.</span></span>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>

</section>
@endsection