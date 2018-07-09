<!DOCTYPE html>
<?php include('Admin/koneksi.php'); ?>
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
                            <form action="Admin/aksipesan.php" method="post" id="contactForm"><input class="form-control" type="hidden" name="Introduction"<input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden" name="to"
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
                    <div class="form-group has-feedback"><label for="from_name">Name</label><input class="form-control" type="text" name="nama"  placeholder="Full Name" id="from_name" tabindex="-1"></div>
                    <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control" type="email" name="email" placeholder="Email Address" id="from_email"></div>
                    <div class="form-group">
                        <div class="form-group has-feedback"><label for="from_email">Phone</label><input class="form-control"  name="no_handphone" placeholder="Primary Phone" id="from_email"></div>
                   
                    </div>
                    <div class="form-group"><label for="comments">Pertanyaan / Komentar</label><textarea class="form-control" rows="5" name="pesan" placeholder="Enter comments here" id="comments"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="submit" name="input">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                    <hr>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend> Locate Us</legend>
                    </fieldset>
                    <div class="form-row" ">
                        <div class="col-md-12 " style="margin-bottom: 30px; margin-left: 20px;">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.645825094252!2d106.9780218140911!3d-6.178142062257071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bb65895b69b%3A0x604ebcc5db05ed7d!2sGBI+KASIH+KARUNIA!5e0!3m2!1sid!2sid!4v1531156516010" width="400" height="300" frameborder="0" style="border:0" allowfullscreen ></iframe>
                        </div>
                        <div class="col-sm-6" style="padding-left: 20px;">
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
                            <div><span><strong>Church </strong></span></div>
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
        <form action="Admin/aksipesan.php" method="post" id="contactForm"><input class="form-control" type="hidden" name="Introduction"<input class="form-control" type="hidden" name="subject" value="My Contact Form"><input class="form-control" type="hidden" name="to"
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
                    <div class="form-group has-feedback"><label for="from_name">Name</label><input class="form-control" type="text" name="nama" required="" placeholder="Full Name" id="from_name" tabindex="-1"></div>
                    <div class="form-group has-feedback"><label for="from_email">Email</label><input class="form-control" type="email" name="email"  placeholder="Email Address" id="from_email"></div>
                    <div class="form-group">
                        <div class="form-group has-feedback"><label for="from_email">Phone</label><input class="form-control" type="phone" name="no_handphone" required="" placeholder="Primary Phone" id="from_email"></div>
                   
                    </div>
                    <div class="form-group"><label for="comments">Pertanyaan / Komentar</label><textarea class="form-control" rows="5" name="pesan" placeholder="Enter comments here" id="comments"></textarea></div>


                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" value="submit" name="input">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                    <hr>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend> Locate Us</legend>
                    </fieldset>
                    <div class="form-row" ">
                        <div class="col-md-12 " style="margin-bottom: 30px; margin-left: 20px;">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.645825094252!2d106.9780218140911!3d-6.178142062257071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bb65895b69b%3A0x604ebcc5db05ed7d!2sGBI+KASIH+KARUNIA!5e0!3m2!1sid!2sid!4v1531156516010" width="400" height="300" frameborder="0" style="border:0" allowfullscreen ></iframe>
                        </div>
                        <div class="col-sm-6" style="padding-left: 20px;">
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
                            <div><span><strong>Church </strong></span></div>
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