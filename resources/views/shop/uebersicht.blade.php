@extends('layout.master')

@section('content')

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="table-responsive">
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Angefragt am:</th>
                            <th>Warenkorb</th>
                            <th>Zeitraum</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Anmerkung</th>
                            <th>Adresse</th>
                            <th>Firma</th>
                        </tr>
                        </thead>
                        <tbody>
                     @foreach($orders as $order)
                            <tr>
                                <td>{{ date('d.m.Y', strtotime($order->created_at)) }}</td>
                                <td>
                                    <ul style="margin-left: 15px">
                                        @foreach($order->orderedItems as $item)
                                            <li>{{ $item->name }} : {{ $item->price }}€ </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>{{ $order->period }}</td>
                                <td>
                                    {{ $order->name }} <br />
                                    {{ $order->lastname }}
                                </td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->telephone }}</td>
                                <td>{{ $order->comment }}</td>
                                <td>
                                    {{ $order->postcode }} <br />
                                    {{ $order->city }} <br />
                                    {{ $order->street }}
                                </td>
                                <td>
                                    {{ $order->company }}
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </section><!-- #content end -->
@endsection