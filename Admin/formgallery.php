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
  

            <!-- MAIN CONTENT-->
          
                            


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Gallery </strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="aksigallery.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Admin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static"><?php echo $user_name ?></p>
                                                </div>
                                            </div>
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">kategori</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="kategori" id="select" class="form-control">
                                                      
                                                        <option value="1.Umum">1. Umum</option>
                                                        <option value="2.KKR">2. KKR</option>
                                                        <option value="3.YOUTH">3. YOUTH</option>
                                                        <option value="4.RETREAT">4. RETREAT</option>
                                                        <option value="5.NATAL">5. NATAL</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                           <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">deskripsi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="deskripsi" placeholder="deskripsi" class="form-control">
                                                   
                                                </div>
                                            </div>
                                           
                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Gambar</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="gambar" class="form-control-file">
                                                </div>
                                            </div>


                                            <button type="submit" value="submit"\ name="input"class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        </form>
                                    </div>
                                   
                                </div>
                            
                            </div>

                           <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            
                                            <th >id</th>
                                            <th>kategori</th>
                                            <th>deskripsi</th>
                                            <th>gambar</th>
                                           
                                            <th>control</th>

                                          
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                             <?php
            $query_mysql = mysqli_query($db_link, "SELECT * FROM gallerytbl ORDER BY id_foto ASC ");
            while($data = mysqli_fetch_array($query_mysql, MYSQLI_ASSOC)){
            ?>
                                        
                                        <tr class="tr-shadow">
                                          
                                            <td><?php echo $data['id_foto'];?>
                                                
                                            </td>
                                            <td>
                                                <span class="block-email">
                                                    <?php echo $data['kategori'] ?>
                                                </span>
                                            </td>
                                            <td class="desc"><?php echo $data['deskripsi'] ?></td>


                                            <td><?php echo $data['gambar'] ?></td>
                                           
                                           
                                            

                                            <td>
                                                <div class="table-data-feature">
                                                    <?php if($_SESSION['role']=='superadmin'){
                                                        echo '<a href="formupdategallery.php?id_foto='?><?php echo $data['id_foto']; ?><?php echo'"
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                </a>';
                                                    }else{
                                                        echo '';
                                                    } ?>
                                                   
                                                    
                                                    <?php if($_SESSION['role']=='superadmin'){
                                                        echo '
                                                    <a href="deletefoto.php?id_foto='?><?php echo $data['id_foto']; ?><?php echo '"


                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    </a>';
                                                    }else{
                                                        echo '';
                                                    }?>




                                                   
                                                </div>
                                            </td>
                                            
                                        </tr>


                                    <?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
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
