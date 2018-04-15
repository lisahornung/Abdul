<!DOCTYPE html>
<html dir="ltr" lang="de">
<head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="Dirk Hornung" />

        <meta name="description" content="Fuldaer DJ für Hochzeiten, Geburtstage und Firmenevents. Vermieter von Anlagen und Beleuchtung." />
        <meta name="keywords" content="DJ, Hochzeit, Geburtstag, Firmenevent" />

        <!-- for Facebook -->
        <meta property="og:title" content="DJ Abdul" />
        <meta property="og:description" content="Fuldaer DJ für Hochzeiten, Geburtstage und Firemenevents. Vermieter von Anlagen und Beleuchtung." />


    <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('img/favicon.jpg')}}" />
    <!-- / -->

    <!-- Stylesheets
    ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/dark.css')}}"/>

        <!-- Agency Demo Specific Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/agency.css')}}"/>
        <!-- / -->

        <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

        <!-- Date & Time Picker CSS -->
        <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/timepicker.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}" type="text/css" />

        <!-- Bootstrap Data Table Plugin -->
        <link rel="stylesheet" href="{{ asset('css/bs-datatable.css') }}" type="text/css" />

        <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="{{asset('css/colors.php?color=c0bb62')}}" type="text/css" />

        <link rel="stylesheet" href="{{asset('css/design.css')}}" type="text/css" />


        <!-- Document Title
        ============================================= -->

        <title>DJ Abdul | {{ \Request::route()->getName() }}</title>

        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-83805890-1', 'auto');
            ga('send', 'pageview');
            ga('require', 'ecommerce');
        </script>
        <!-- End Google Analytics -->

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter39509565 = new Ya.Metrika({
                            id:39509565,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/39509565" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->


</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    @include('layout.header')
    <!-- #header end -->



    <!-- Content
    ============================================= -->
        @yield('content')
    <!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer">

        <!-- Copyrights
============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    <?php
                    if( ! ini_get('date.timezone') )
                    {
                        date_default_timezone_set('GMT');
                    }
                    ?>
                    Copyrights &copy; <?php echo date('Y'); ?> All Rights Reserved by DJ Abdul<br>
                    <div class="copyright-links">
                        <a href="{{ Route('Login') }}">Login</a>
                        <a href="{{ Route('Impressum') }}">Impressum</a>
                        <a href="{{ Route('Salsaevent') }}">Salsaevent</a>
                    </div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="https://www.facebook.com/salsaabdul/" target="_blank" class="social-icon si-small si-light si-rounded si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                </div>

            </div>

        </div><!-- #copyrights end -->



    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/cookie.js')}}"></script>

<!-- Date & Time Picker JS -->
<script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="{{ asset('js/daterangepicker.js') }}"></script>

<!-- Bootstrap Data Table Plugin -->
<script type="text/javascript" src="{{ asset('js/bs-datatable.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>

<script>
    $('.alert').delay(2500).slideUp()
</script>

<script>
    jQuery(document).ready( function($){
        $('#shop').isotope({
            transitionDuration: '0.65s',
            getSortData: {
                name: '.product-title',
                price_lh: function( itemElem ) {
                    if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
                        var price = $(itemElem).find('.product-price ins').text();
                    } else {
                        var price = $(itemElem).find('.product-price').text();
                    }

                    priceNum = price.split("€");

                    return parseFloat( priceNum[1] );
                },
                price_hl: function( itemElem ) {
                    if( $(itemElem).find('.product-price').find('ins').length > 0 ) {
                        var price = $(itemElem).find('.product-price ins').text();
                    } else {
                        var price = $(itemElem).find('.product-price').text();
                    }

                    priceNum = price.split("€");

                    return parseFloat( priceNum[1] );
                }
            },
            sortAscending: {
                name: true,
                price_lh: true,
                price_hl: false
            }
        });

        $('.custom-filter:not(.no-count)').children('li:not(.widget-filter-reset)').each( function(){
            var element = $(this),
                    elementFilter = element.children('a').attr('data-filter'),
                    elementFilterContainer = element.parents('.custom-filter').attr('data-container');

            elementFilterCount = Number( jQuery(elementFilterContainer).find( elementFilter ).length );

            element.append('<span>'+ elementFilterCount +'</span>');

        });

        $('.shop-sorting li').on("click", function() {
            $('.shop-sorting').find('li').removeClass( 'active-filter' );
            $(this).addClass( 'active-filter' );
            var sortByValue = $(this).find('a').attr('data-sort-by');
            $('#shop').isotope({ sortBy: sortByValue });
            return false;
        });

//        Select Pakete
        $(document).ready(function(){
            $('.Pakete').trigger("click");
        });
    });


    var scroll = $(window).scrollTop();
    // When document is ready...
    $(document).ready(function() {
// If cookie is set, scroll to the position saved in the cookie.
        if ( $.cookie("scroll") !== null ) {
            $(document).scrollTop( $.cookie("scroll") );
        }

// When a button is clicked...
        $(':button').on("click", function() {
            // Set a cookie that holds the scroll position.
            Cookies.set("scroll", $(document).scrollTop() );

        });
        $('.item-quick-view').on("click", function() {
            // Set a cookie that holds the scroll position.
            Cookies.set("scroll", $(document).scrollTop() );

        });


    });//end of document.ready

</script>

<script type="text/javascript">


    $(function() {


        // .daterange4
        $(".daterange4").daterangepicker({
            autoUpdateInput: false,
            "locale": {
                "format": "DD.MM.YYYY",
                "separator": " - ",
                "applyLabel": "Eintragen",
                "cancelLabel": "Löschen",
                "fromLabel": "Von",
                "toLabel": "Bis",
                "customRangeLabel": "Custom",
                "weekLabel": "W",
                "daysOfWeek": [
                    "So",
                    "Mo",
                    "Di",
                    "Mi",
                    "Do",
                    "Fr",
                    "Sa"
                ],
                "monthNames": [
                    "Januar",
                    "Februar",
                    "März",
                    "April",
                    "Mai",
                    "Juni",
                    "Juli",
                    "August",
                    "September",
                    "Oktober",
                    "November",
                    "Dezember"
                ],
                "firstDay": 1
            },
            "buttonClasses": "button button-rounded button-mini nomargin",
            "applyClass": "button-color",
            "cancelClass": "button-light"
        });

        $(".daterange4").on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD.MM.YYYY') + ' - ' + picker.endDate.format('DD.MM.YYYY'));
        });

        $(".daterange4").on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

    });

</script>

<script>

    $(document).ready(function() {
        $('#datatable1').DataTable({
            "order": [[ 0, "desc" ]]
        });
    });

</script>

<script>
    {{--Einkaufswagen Form validation: https://jqueryvalidation.org/validate/ --}}
    $("#einkaufswagenForm").validate();

</script>
</body>
</html>