<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gbikasihkarunia2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <?php include_once("navbar.php")?>
    <div class="container">
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Contact Information</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <form action="javascript:void();" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com"><input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden"
                                name="to" value="email@mywebsite.com">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="modal-successfail"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6" id="modal-message">
                                    <fieldset>
                                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                    </fieldset>
                                    <div class="form-group has-feedback"><label for="modal_from_name">Name</label><input class="form-control" type="text" name="from_name" required="" placeholder="Full Name" id="modal_from_name" tabindex="-1"></div>
                                    <div class="form-group has-feedback"><label for="modal_from_email">Email</label><input class="form-control" type="email" name="from_email" required="" placeholder="Email Address" id="modal_from_email"></div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group has-feedback"><label for="modal_from_phone">Phone</label><input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="modal_from_phone"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"><label for="modal_calltime">Best Time to Call</label><select class="form-control" name="Call Time" id="modal_calltime"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="modal_comments">Comments</label><textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="modal_comments"></textarea></div>
                                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>
                                    </fieldset>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="static-map"><a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Washington Monument"></a></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                                            </fieldset>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@address.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr>
                                        </div>
                                        <div class="col-sm-6">
                                            <fieldset>
                                                <legend><i class="fa fa-location-arrow"></i> Our Address</legend>
                                            </fieldset>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr.</span></div>
                                            <div><span>Daytona Beach, FL 81500</span></div>
                                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form action="javascript:void();" method="get" id="contactForm"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.mywebsite.com"><input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden" name="to"
                value="email@mywebsite.com">
            <div class="form-row">
                <div class="col-md-6">
                    <div id="successfail"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6" id="message">
                    <fieldset>
                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                    </fieldset>
                    <div class="form-group has-feedback"><label for="from_name">Name</label><input class="form-control" type="text" name="from_name" required="" placeholder="Full Name" id="from_name" tabindex="-1"></div>
                    <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control" type="email" name="from_email" required="" placeholder="Email Address" id="from_email"></div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback"><label for="from_phone">Phone</label><input class="form-control" type="text" name="from_phone" placeholder="Primary Phone" id="from_phone"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="calltime">Best Time to Call</label><select class="form-control" name="Call Time" id="calltime"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                        </div>
                    </div>
                    <div class="form-group"><label for="comments">Pertanyaan / Komentar</label><textarea class="form-control" rows="5" name="Comments" placeholder="Enter comments here" id="comments"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                    <hr>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend> Locate Us</legend>
                    </fieldset>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="static-map"><a href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024" target="_blank"><img class="img-fluid" src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12" alt="Google Map of Washington Monument"></a></div>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="fa fa-envelope"></i> Contact Us</legend>
                            </fieldset>
                            <div><span><strong>Name</strong></span></div>
                            <div><span>GBIkasihkarunia@gbikk.com</span></div>
                            <div><span>www.gbikasihkarunia.com</span></div>
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <fieldset>
                                <legend><i class="icon ion-location" style="font-size:22px;"></i> Our Address</legend>
                            </fieldset>
                            <div><span><strong>Office Name</strong></span></div>
                            <div><span>55 Icannot Dr.</span></div>
                            <div><span>Daytona Beach, FL 81500</span></div>
                            <div><abbr data-toggle="tooltip" data-placement="top" title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <footer id="myFooter" style="margin-top:68px;">
         <?php include_once("footer.php")?>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>