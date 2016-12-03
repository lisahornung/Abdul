@extends('layout.master', compact('cart'))

@section('content')
    <section id="slider" class="boxed-slider">

        <div class="container clearfix">

            <div id="oc-slider" class="owl-carousel carousel-widget" data-items="1" data-loop="true" data-nav="true" data-autoplay="5000" data-animate-in="fadeIn" data-animate-out="fadeOut" data-speed="800">

                <img src="{{asset('img/wunderkerze.jpg')}}" alt="DJ Abdul">
                <img src="{{asset('img/location.jpg')}}" alt="DJ Abdul">
                <img src="{{asset('img/wedding.jpg')}}" alt="DJ Abdul">

            </div>


        </div>

    </section>

    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">

                <div class="row clearfix">

                    <div class="col-md-4 center bottommargin">
                        <i class="i-plain color i-large icon-line2-present inline-block" style="margin-bottom: 20px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Die ausgiebigste Feier.</span>
                            <h4>Geburtstage</h4>
                        </div>
                        <p>Sie würden gerne ausgiebig mit Familie und Freunden feiern? Wir bringen die passenden Rahmen und machen das Altwerden zu einer runden Sache! </p>
                    </div>

                    <div class="col-md-4 center bottommargin">
                        <i class="i-plain color i-large icon-line2-diamond inline-block" style="margin-bottom: 20px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Der schönste Tag.</span>
                            <h4>Hochzeiten</h4>
                        </div>
                        <p>Hochzeiten sind für viele der schönste Tag im Leben. Damit auch für Sie dieser Tag zu einem der schönsten wird, können Sie auf meine Erfahrung also Hochzeits-DJ in Fulda und ganz Deutschland zählen.</p>
                    </div>

                    <div class="col-md-4 center bottommargin">
                        <i class="i-plain color i-large icon-group inline-block" style="margin-bottom: 20px;"></i>
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <span class="before-heading">Die glücklichsten Mitarbeiter.</span>
                            <h4>Firmenevents</h4>
                        </div>
                        <p>Sie brauchen passende Musik und Ausleuchtung für ihre Weihnachtsfeier, Jubiläumsfeier oder Autopräsentation?
                            Dann sind sie bei mir an der richtigen Stelle.</p>
                    </div>

                </div>

                <div class="line notopmargin"></div>

                <h3 class="center">Letzte <span>Events</span></h3>

                <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1" data-loop="true" data-nav="true" data-pagi="false"data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="4">

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="{{asset('img/template/portfolio/4/1.jpg')}}" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{asset('img/template/portfolio/full/1.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="{{asset('img/template/portfolio/4/2.jpg')}}" alt="Locked Steel Gate">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{asset('img/template/portfolio/full/2.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                <span><a href="#">Illustrations</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="{{asset('img/template/portfolio/4/3.jpg')}}" alt="Mac Sunglasses">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="{{asset('img/template/portfolio/4/5.jpg')}}" alt="Console Activity">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{asset('img/template/portfolio/full/5.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="{{asset('img/template/portfolio/4/7.jpg')}}" alt="Backpack Contents">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="{{asset('img/template/portfolio/4/8.jpg')}}" alt="Sunset Bulb Glow">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{asset('img/template/portfolio/full/8.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                <span><a href="#">Graphics</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="{{asset('img/template/portfolio/4/10.jpg')}}" alt="Study Table">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="iportfolio">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="{{asset('img/template/portfolio/4/11.jpg')}}" alt="Workspace Stuff">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="{{asset('img/template/portfolio/full/11.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="line"></div>

                <h3 class="center">What <span>Clients</span> Say</h3>

                <div class="fslider testimonial testimonial-full noshadow noborder nopadding divcenter" data-animation="fade" data-arrows="false" style="max-width: 700px;">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="line"></div>

                <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="100" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

                    <div class="oc-item"><a href="#"><img src="{{asset('img/fulda.jpg')}}" alt="Fulda"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/klinikumFulda.jpg')}}" alt="Klinikum Fulda"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/hochstift.jpg')}}" alt="Hochstift"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/esperanto.jpg')}}" alt="Esperanto"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/edag.jpg')}}" alt="Edag"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/loewe.jpg')}}" alt="Löwe"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/siebenWelten.jpg')}}" alt="Sieben Welten"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/commerzbank.jpg')}}" alt="Commerzbank"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/atzert_weber.jpg')}}" alt="Atzert Weber"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('img/maritim.jpg')}}" alt="Maritim"></a></div>

                </div>


            </div>

        </div>
    </section>
@endsection