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
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">GALLERY</h1>
            <div class="filtr-controls"><span class="active" data-filter="all">all </span><span data-filter="1">Umum</span><span data-filter="2">KKR </span><span data-filter="3">Youth </span><span data-filter="4">Retreat </span>
                <span data-filter="5">Natal </span>


            </div>
            
        

            <div class="row filtr-container">
                      <?php
            $query_mysql = mysqli_query($db_link, "SELECT * FROM gallerytbl ORDER BY id_foto DESC");
            while($data = mysqli_fetch_array($query_mysql, MYSQLI_ASSOC)){
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 filtr-item" data-category="<?php echo substr($data['kategori'],0,1);?>"><a href="Admin/images/<?php echo $data['gambar'];?>"><img class="img-fluid" src="Admin/images/<?php echo $data['gambar'];?>" data-caption="<strong><?php echo $data['deskripsi'];?></strong>"></a></div>
                
 <?php } ?>

            </div>

           
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>