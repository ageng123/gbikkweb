<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form

  $tanggal= $_POST['Tanggal_publish'];
  $videonya = $_POST['videonya'];
  

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO video_pengumuman (tanggal_publish,videonya)
  VALUES ('$tanggal', '$videonya')";
  $result = mysqli_query($db_link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db_link).
           " - ".mysqli_error($db_link));
  }
}

// melakukan redirect (mengalihkan) ke halaman videopengumuman.php

header("location:videopengumuman.php");
?>