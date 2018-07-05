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
    <link rel="stylesheet" href="assets/css/-Filterable-Gallery-with-Lightbox-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive-1.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive-2.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive.css">
</head>

<body style="background-image:url(&quot;assets/img/pray.jpg&quot;);background-size:cover;background-repeat:no-repeat;">
   <?php include_once("navbar.php")?>
    <div id="form" class="container">
        <h1 class="text-center" style="margin-bottom:46px;font-family:Arvo, serif;">Pelayanan Doa</h1>
        <p class="text-center" style="font-family:Montserrat, sans-serif;"><br>Sebagai orang Kristen, saat kita menghadapi masalah, kita diperhadapkan dengan dua pilihan yaitu menyerah dengan masalah atau mengandalkan Tuhan melalui doa. Firman Tuhan berkata doa orang benar, bila dengan yakin didoakan, sangat besar kuasanya.Kami,
            tim pendoa, ada bersama Anda untuk mendukung Anda dalam doa atas masalah-masalah yang dihadapi sampai TUHAN menyatakan kemulian-Nya atas permohonan Anda.<br><br></p>
        <blockquote class="blockquote">
            <p class="lead text-left mb-0 bold"><br><br><em>"Janganlah hendaknya kamu kuatir tentang apapun juga, tetapi nyatakanlah dalam segala hal keinginanmu kepada Allah dalam doa dan permohonan dengan ucapan syukur. Damai sejahtera Allah, yang melampaui segala akal, akan memelihara hati dan pikiranmu dalam Kristus Yesus."&nbsp;</em><br><br></p>
            <footer
                class="blockquote-footer" style="color:rgb(210,11,11);"><strong><em>Filipi 4 : 6 - 7</em></strong><br><br></footer>
        </blockquote>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="Admin/aksidoa.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                    	<label>Nama</label>
                    	<input class="form-control" type="text" name="nama" required="">
                    </div>
                    <div class="form-group">
                    	<label>Alamat</label>
                    	<input class="form-control" type="text" name="alamat" required="">
                    </div>
                   	<div class="form-group">
                   		<label>No. Telepon</label>
                   		<input class="form-control" type="text" name="no_handphone">
                   		<label style="font-size:14px;">*Diperlukan jika ingin dibalas melalui SMS/WA</label>
                   	</div>
                   
                    <div class="form-group">
                    	<label>pesan</label>
                    	<textarea class="form-control" name="isi_doa"  style="height:116px;"></textarea>
                    </div>


                    <button type="submit" value="submit" name="input"class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>


       			</form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>