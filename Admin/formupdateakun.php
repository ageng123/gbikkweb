<?php 
include_once('koneksi.php');
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
          
                            


                           <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update akun</strong> Elements
                                    </div>
                                    <div class="card-body card-block">

                                         <!-- form-->
                                    <?php
                                    if(isset($_GET['id'])):
                                         if(isset($_POST['update'])):
                                              $id = $_GET['id'];
                                              
                                              $stmt = $db_link->prepare("UPDATE user SET username=?,password=?,nama_user=?,email=? WHERE id=?");

                                              $stmt->bind_param('sssss',$username,$password,$nama_user,$email,$id);
                                     
                                              $nama_user = $_POST['nama'];
                                              $email = $_POST['email'];
                                              $username = $_POST['username'];
                                              $password = $_POST['password'];
                                                

                                              if($stmt->execute()):
                                                   echo "<script>location.href='form.php'</script>";
                                              else:
                                                   echo "<script>alert('".$stmt->error."')</script>";
                                              endif;
                                         endif;
                                         $res = $db_link->query("SELECT * FROM user WHERE id=".$_GET['id']);
                                         $row = $res->fetch_assoc();
                                    ?>
                                        <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                               
                                               <input type="hidden" value="<?php echo $row['id']; ?> "id="text-input" name="" placeholder="Judul Event" class="form-control">
                                                   




                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Admin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo $username ?></p>
                                                </div>


                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">username</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="username" placeholder="Judul Event" value="<?php echo $row['username'] ?>" class="form-control">
                                                   
                                                </div>
                                            </div>


                                             


                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama" placeholder="Judul Event" class="form-control" value="<?php echo $row['nama_user']; ?>">
                                                   
                                                </div>
                                            </div>


                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="email" placeholder="Judul Event" class="form-control" value="<?php echo $row['email']; ?>">
                                                   
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="password" placeholder="Password" class="form-control" value="<?php echo $row['password']; ?>">
                                                   
                                                </div>
                                            </div>


                                            <button type="submit" value="Submit" name="update" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        </form>
                                         <?php endif; ?>


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
            </div>
        </div>

    </div>

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
