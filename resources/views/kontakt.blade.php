@extends('layout.master')

@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">


                @if (isset($sent) )
                    <div class="section notopmargin nobottommargin clearfix alert-success" style="background-color: #dff0d8; color: #3c763d  ">
                        <div class="container clearfix">
                            <div class="heading-block center nobottomborder nobottommargin">
                                <h2 class="t500 nott" style="font-size: 36px;">Vielen Dank für Ihre Nachricht.</h2>
                                <span >Wir melden uns in kürze bei Ihnen.</span></span>
                            </div>
                        </div>
                    </div>
                @else


                    <!-- Postcontent
                    ============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>Senden Sie uns eine Nachricht</h3>

                        <div>

                            <div class="contact-form-result"></div>

                            <form class="nobottommargin"  action="{{ route('KontaktPOST') }}" method="post">
                                {{ csrf_field() }}

                                <div class="form-process"></div>

                                <div class="col_one_third">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                                </div>

                                <div class="col_one_third">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="col_one_third col_last">
                                    <label for="template-contactform-phone">Telefon</label>
                                    <input type="text" id="template-contactform-phone" name="telefon" value="" class="sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="template-contactform-subject">Anliegen <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="anliegen" value="" class="required sm-form-control" />
                                </div>


                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="template-contactform-message">Nachricht <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="nachricht" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col_full hidden">
                                    <input type="text" id="template-contactform-paket" name="template-contactform-paket" value="kontakt" class="sm-form-control" />
                                </div>

                                <div class="col_full hidden">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <button class="button button-3d nomargin" type="submit" value="submit">Absenden</button>
                                </div>

                            </form>
                        </div>

                    </div><!-- .postcontent end -->



                <!-- Sidebar
                ============================================= -->
                <div class="sidebar col_last nobottommargin">

                    <address>
                        <strong>Adresse:</strong><br>
                        Am Holderstrauch 28 <br>
                        36041 Fulda
                    </address>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 01726653236<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> abdul@salsaevent.de





                </div><!-- .sidebar end -->
                @endif

            </div>

        </div>

    </section>
@endsection