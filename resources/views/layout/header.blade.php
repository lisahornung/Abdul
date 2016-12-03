<header id="header" class="sticky-style-2">

    <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo" class="divcenter">
            <a href="index-agency.html" class="standard-logo"><img class="divcenter" src="{{asset('img/logo.jpg')}}" alt="DJ Abdul Logo"></a>
            <a href="index-agency.html" class="retina-logo"><img class="divcenter" src="{{asset('img/logo.jpg')}}" alt="DJ Abdul Logo"" alt="DJ Abdul Logo"></a>
        </div><!-- #logo end -->

    </div>

    <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2 center">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <ul>
                    <li class="{{ Request::is('/') ? 'current' : '' }}">
                        <a href="{{ route('Home') }}"><div>Home</div></a>
                    </li>
                    <li class="{{ Request::is('Agentur*') ? 'current' : '' }}">
                        <a href="{{ route('Agentur') }}"><div>Über Mich</div></a>
                    </li>
                    <li class="{{ Request::is('Leistungen*') ? 'current' : '' }}">
                        <a href="{{ route('Leistungen') }}"><div>Leistungen</div></a>
                    </li>
                    <li class="{{ Request::is('Vermietung*') ? 'current' : '' }}">
                        <a href="{{ route('Vermietung') }}"><div>Vermietung</div></a>
                    </li>
                    {{--<li class="{{ Request::is('Pakete*') ? 'current' : '' }}">--}}
                        {{--<a href="{{ route('Pakete') }}"><div>Pakete</div></a>--}}
                    {{--</li>--}}
                    <li class="{{ Request::is('Kontakt*') ? 'current' : '' }}">
                        <a href="{{ route('Kontakt') }}"><div>Kontakt</div></a>
                    </li>
                    <li class="{{ Request::is('Einkaufswagen*') ? 'current' : '' }}">
                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart">
                            <a href="{{ route('Einkaufswagen') }}" ><i class="icon-shopping-cart"></i><span>{{ Cart::count() }}</span></a>
                        </div><!-- #top-cart end -->
                    </li>
                </ul>

                @if (Session::has('flash_message'))
                    <div class="alert {{ Session::get('flash_message_class') }} center">{{ Session::get('flash_message') }}</div>
                @endif



            </div>



        </nav><!-- #primary-menu end -->

    </div>

</header>
