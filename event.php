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
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section id="bagian-atas">
       <?php include_once("navbar.php")?>
    </section>
    <div id="content-event" class="container" style="margin-top:8px;">
        <div class="row">
            <div class="col-xs-12 ">
                <h1 style="margin-bottom:47px;">GBI KASIH KARUNIA</h1>
                <h2>Special Event</h2>
                <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                    
                    </ul>
                  
                  <!-- The slideshow -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">

                        <?php
            $query_mysql = mysqli_query($db_link, "SELECT * FROM main_event ORDER BY id_main DESC limit 1"); while($data = mysqli_fetch_array($query_mysql, MYSQLI_ASSOC)){
            ?>


                    <img src="Admin/images/<?php echo $data['gambar']; ?>" alt="Los Angeles" width="1100" height="500">
                    </div>

                <?php } ?>


                    <div class="carousel-item">

                        <?php
            $query_mysql = mysqli_query($db_link, "SELECT * FROM main_event2 ORDER BY id_main2 DESC limit 1"); while($data = mysqli_fetch_array($query_mysql, MYSQLI_ASSOC)){
            ?>

                      <img src="Admin/images/<?php echo $data['gambar']; ?>" alt="Chicago" width="1100" height="500">
                    </div>
                    
                <?php } ?>
                  </div>
                  
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
            </div>
        </div>
        <div class="container">
           


           
            <div class="row" style="margin-top:62px;">
                <div class="col-8" style="margin:2px;margin-bottom:60px;">
                    <h2 style="margin-bottom:26px;">Upcoming Events</h2>

                     <?php
            $query_mysql = mysqli_query($db_link, "SELECT * FROM event ORDER BY id_event DESC");
            while($data = mysqli_fetch_array($query_mysql, MYSQLI_ASSOC)){
            ?>
                    <div class="card" id="thumnail-upcoming"><img class="img-fluid card-img-top w-100 d-block" src="Admin/images/<?php echo $data['gambar'];?>" style="height:300px;">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $data['tanggal'] ; ?></h6>
                            <h4 class="card-title"><?php echo $data['judul'] ; ?></h4>
                            <p class="card-text"><?php echo $data['keterangan'] ; ?></p>
                            <a href="detailevent.php?id_event=<?php echo $data['id_event']?>">
                            <button class="btn btn-primary" type="button">Button</button>
                            </a>



                        </div>

                    </div>
                   <?php } ?>
                    
                </div>
          
            </div>
        
        </div>
    </div>
	
	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>