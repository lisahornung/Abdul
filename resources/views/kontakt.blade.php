@extends('layout.master')

@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class="postcontent nobottommargin">

                    <h3>Senden Sie uns eine Nachricht</h3>

                    <div class="contact-widget">

                        <div class="contact-form-result"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="sendMail.php" method="post">

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Telefon</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_two_third">
                                <label for="template-contactform-subject">Anliegen <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-service">Services</label>
                                <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="Geburtstag">Geburtstag</option>
                                    <option value="Hochzeit">Hochzeit</option>
                                    <option value="Firmenevent">Firmenevent</option>
                                    <option value="Mieten">Mieten</option>
                                </select>
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Nachricht <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-paket" name="template-contactform-paket" value="kontakt" class="sm-form-control" />
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Absenden</button>
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

            </div>

        </div>

    </section>
@endsection