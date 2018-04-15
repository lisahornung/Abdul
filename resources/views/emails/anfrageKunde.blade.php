<style>
    table {
        width: 100%;
    }
    th {
        border-bottom: 1px solid #dddddd;
    }
    .border-top {
        border-top: 1px solid #dddddd;
    }

    td {
        text-align: center;
    }
</style>

Sehr geehrter Herr {{ $order->lastname }}, <br />
vielen Dank für Ihre Anfrage über folgende Objekte:
<table class="table cart">
    <thead>
    <tr class="border-bottom">
        <th class="cart-product-thumbnail">Bild</th>
        <th class="cart-product-name">Name</th>
        <th class="cart-product-subtotal">Preis</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($orderedItems as $item)
                <tr class="cart_item">
                    <td class="cart-product-thumbnail">
                        <img width="64" height="64" src="{{ asset('img/vermietung/shop/' . str_replace(' ', '_', $item['original']['name']). '_1.jpg') }}" alt="{{ $item['original']['name'] }} ">
                    </td>

                    <td class="cart-product-name">
                        {{ $item['original']['name'] }}
                    </td>

                    <td class="cart-product-subtotal">
                        <span class="amount">€{{ $item['original']['price'] }}</span>
                    </td>
                </tr>
            @endforeach
            <tr class="cart_item">
                <td></td>
                <td class="cart-product-name border-top">
                    <strong>Umsatzsteuer (19%)</strong>
                </td>

                <td class="cart-product-subtotal border-top">
                    <span class="amount">€{{ $tax }}</span>
                </td>
            </tr>
            <tr class="cart_item border-top">
                <td class="notopborder"></td>
                <td class=" cart-product-name">
                    <strong>Gesamt</strong>
                </td>
                <td class=" cart-product-subtotal">
                    <span class="amount color lead"><strong>€{{ $total }}</strong></span>
                </td>
            </tr>
            </tbody>

        </table>
<br />
<br />
Ich werde mich schnellstmöglich mit Ihnen in Verbindung setzen.
<br />
<br />
<br />
Mit freundlichen Grüßen, <br />
Abdul Ahmat
