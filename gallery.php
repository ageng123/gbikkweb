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
    <section class="py-5">
        <div class="container">
            <h1 class="text-center">GALLERY</h1>
            <div class="filtr-controls"><span class="active" data-filter="all">all </span><span data-filter="1">category 1 </span><span data-filter="2">category 2 </span><span data-filter="3">category 3 </span></div>
            <div class="row filtr-container">
                <div class="col-sm-6 col-md-4 col-lg-3 filtr-item" data-category="1, 3"><a href="assets/img/kegiatan2.jpeg"><img class="img-fluid" src="assets/img/kegiatan2.jpeg" data-caption="<strong>Image description</strong><br><em>Lorem ipsum</em>"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 filtr-item" data-category="2"><a href="assets/img/kegiatan1.jpeg"><img class="img-fluid" src="assets/img/kegiatan1.jpeg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 filtr-item" data-category="1, 3"><a href="assets/img/kegiatan3.jpeg"><img class="img-fluid" src="assets/img/kegiatan3.jpeg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 filtr-item" data-category="2, 3"><a href="assets/img/kegiatan3.jpeg"><img class="img-fluid" src="assets/img/kegiatan3.jpeg"></a></div>
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