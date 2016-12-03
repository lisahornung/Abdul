<!-- Modal -->
<div class="modal fade" id="buchen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                </div>
                <div class="modal-body">
                <!--                    <form class="form-horizontal">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Name:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Max Mustermann">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="max.mustermann@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Telefon*:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="0132 758904232">
                            </div>
                        </div>

                    </form>-->
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

                            <!--                        <div class="col_two_third">
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
                                                    </div>-->

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-paket" name="template-contactform-paket" value="kontakt" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <!--                        <div class="col_full">
                                                            <label for="template-contactform-message">Nachricht <small>*</small></label>
                                                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                                    </div>-->

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>



                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                    <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" data-dismiss="modal" onclick="$('#template-contactform').submit()">Absenden</button>
                </div>
            </div>
        </div>
    </div>
</div>
