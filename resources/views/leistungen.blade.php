@extends('layout.master')

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clear-bottommargin clearfix">

                <div class="heading-block center">
                    <h2>Leistungen</h2>
                    <span>Meine Leistungen im Überblick</span>
                </div>

                <div class="row">
                    <div class="col-md-4 bottommargin">
                        <img data-animate="fadeInLeftBig" src="img/leistungen.jpg" alt="Cafe" class="center-block">
                    </div>

                    <div class="col-md-4 col-sm-6 topmargin bottommargin">
                        <div class="col_full">
                            <div class="feature-box fbox-plain fbox-small fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-location"></i></a>
                                </div>
                                <h3>Location</h3>
                                <p>Passende Wahl der Location. Ich kenne die besten Flecke Fuldas.</p>
                            </div>
                        </div>

                        <div class="col_full">
                            <div class="feature-box fbox-plain fbox-small fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-sound"></i></a>
                                </div>
                                <h3>Sound</h3>
                                <p>Bereitstellung hochwertiger Musiksysteme.</p>
                            </div>
                        </div>

                        <div class="col_full nobottommargin">
                            <div class="feature-box fbox-plain fbox-small fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line-power"></i></a>
                                </div>
                                <h3>Light</h3>
                                <p>Atmosphären schaffende Raumausleuchtung und aufregende Partybeleuchtung.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 topmargin bottommargin">
                        <div class="col_full">
                            <div class="feature-box fbox-plain fbox-small fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-line2-present"></i></a>
                                </div>
                                <h3>Geburtstage</h3>
                                <p>Beratung, Anlage, Licht und DJ für Geburstage jeden alters!</p>
                            </div>
                        </div>

                        <div class="col_full">
                            <div class="feature-box fbox-plain fbox-small fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-diamond"></i></a>
                                </div>
                                <h3>Hochzeiten</h3>
                                <p>Beratung, Anlage, Licht und DJ für traumhafte Hochzeiten!</p>
                            </div>
                        </div>

                        <div class="col_full nobottommargin">
                            <div class="feature-box fbox-plain fbox-small fbox-dark">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-group"></i></a>
                                </div>
                                <h3>Firmenevents</h3>
                                <p>Stilsicheres Equipment und professionelle Beratung für herausstechende Firmenevents!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="line"></div> </br> </br>

            </div>



            <div class="container clear-bottommargin clearfix">

                <div class="heading-block center">
                    <h2>Beratung und Vermittlung</h2>
                    <span>30 Jahre Erfahrung</span>
                </div>

                <div class="row">
                    <p style="text-align: center">
                        Mit über 30 Jahren Erfahrung stehe Ich Ihnen gerne zur Beratung für die Wahl der <b>Location</b>, <b>Caterers</b>, <b>Fotografen</b> oder <b>DJ</b> zur Verfügung.
                    </p>
                </div>

            </div>




        </div>


        {{--<div class="content-wrap">--}}
            {{--<div class="container clearfix">--}}
                {{--<div class="heading-block center">--}}
                    {{--<h2>DJ Pakete</h2>--}}
                    {{--<span>Das rundum Sorglospaket.</span>--}}
                {{--</div>--}}
                {{--<div class="pricing bottommargin clearfix">--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="pricing-box">--}}
                            {{--<div class="pricing-title">--}}
                                {{--<h3>Starter</h3>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-price">--}}
                                {{--<span class="price-unit">&euro;</span>500<span class="price-tenure"></span>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-features">--}}
                                {{--<ul>--}}
                                    {{--<li><strong>Bose</strong> Anlage</li>--}}
                                    {{--<li><strong>DJ</strong></li>--}}
                                    {{--<li>Partybeleuchtung</li>--}}
                                    {{--<li><strike>Raumausleuchtung</strike></li>--}}
                                    {{--<li><strong>< 100</strong> Personen</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-action">--}}
                                {{--<a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Starter" data-service="Services">Anfragen</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="pricing-box best-price">--}}
                            {{--<div class="pricing-title">--}}
                                {{--<h3>All-in-One</h3>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-price">--}}
                                {{--<span class="price-unit">&euro;</span>750<span class="price-tenure"></span>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-features">--}}
                                {{--<ul>--}}
                                    {{--<li><strong>Fohhn 2</strong> Anlage</li>--}}
                                    {{--<li><strong>DJ</strong></li>--}}
                                    {{--<li>Partybeleuchtung</li>--}}
                                    {{--<li>Raumausleuchtung</li>--}}
                                    {{--<li><strong>100 - 150</strong> Personen</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-action">--}}
                                {{--<a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="All-in-One" data-service="Services">Anfragen</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="pricing-box">--}}
                            {{--<div class="pricing-title">--}}
                                {{--<h3>Professional</h3>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-price best-price">--}}
                                {{--<span class="price-unit">&euro;</span>1000<span class="price-tenure"></span>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-features">--}}
                                {{--<ul>--}}
                                    {{--<li><strong>Fohhn 3</strong> Anlage</li>--}}
                                    {{--<li><strong>DJ</strong></li>--}}
                                    {{--<li>Partybeleuchtung</li>--}}
                                    {{--<li>Raumausleuchtung</li>--}}
                                    {{--<li><strong>> 150</strong> Personen</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="pricing-action">--}}
                                {{--<a data-toggle="modal" data-target="#buchen" class="btn btn-gold btn-block btn-lg" data-name="Professional" data-service="Services">Anfragen</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        @include('modal')

    </section><!-- #content end -->
@endsection