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
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="jumbotron jumbotron-fluid hero-nature carousel-hero" style="height:auto;max-width:100%; width:100%;background-image:url(&quot;assets/img/banner2.jpeg&quot;);background-repeat:no-repeat;background-size:cover;background-position:bottom;">
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron hero-photography carousel-hero" style="height:547px;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron hero-technology carousel-hero" style="height:547px;"></div>
                        </div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol
                        class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-top:62px;">
                <div class="col-8" style="margin:2px;margin-bottom:60px;">
                    <h2 style="margin-bottom:26px;">Upcoming Events</h2>
                    <div class="card" id="thumnail-upcoming"><img class="img-fluid card-img-top w-100 d-block" src="assets/img/gospel.jpg" style="height:300px;">
                        <div class="card-body">
                            <h6 class="card-title">12 october 1995</h6>
                            <h4 class="card-title">Judul Event</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
                    </div>
                    <div class="card" id="thumnail-upcoming"><img class="card-img-top w-100 d-block" src="assets/img/ministri.jpg" style="height:300px;">
                        <div class="card-body">
                            <h6 class="card-title">12 october 1995</h6>
                            <h4 class="card-title">Judul Event</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
                    </div>
                    <div class="card" id="thumnail-upcoming"><img class="card-img-top w-100 d-block" src="assets/img/MyNurz-Lansia-Bahagia-2.jpg" style="background-image:url(&quot;assets/img/gospel.jpg&quot;);height:300px;">
                        <div class="card-body">
                            <h6 class="card-title">12 october 1995</h6>
                            <h4 class="card-title">Judul Event</h4>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><button class="btn btn-primary" type="button">Button</button></div>
                    </div>
                </div>
                <div class="col">
                    <h2>Recent Events</h2>
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