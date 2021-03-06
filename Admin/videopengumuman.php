<?php 
include_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
          <!-- HEADER DESKTOP-->
     <?php include ('header.php') ?>

        

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
          
                            


                            <div class="col-lg-6" >
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Video Pengumuman</strong> 
                                    <div class="card-body card-block">
                                        <form action="aksivideopengumuman.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                           
                                            <div class="row form-group" >
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Tanggal</label>
                                                </div>
                                              
                                                 <div class="col-12 col-md-9">
                                                    <input type="date" id="date-input" name="Tanggal_publish" placeholder="" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">URL</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="videonya" placeholder="Text" class="form-control">
                                                   
                                                </div>
                                            </div>
                                       
                                   
                                         
                                            
                                         
                                          
                                            
                                            <button type="submit" value="submit"\ name="input"class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        </form>
                                    </div>
                                    
                                </div>
                            
                            </div>

                          
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
  

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
