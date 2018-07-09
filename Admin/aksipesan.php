<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form

  $nama= $_POST['nama'];
  $email  = $_POST['email'];
  $no_handphone = $_POST['no_handphone'];
  $pesan = $_POST['pesan'];
  

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO pesantbl (nama, email, no_handphone, pesan)
  VALUES ('$nama', '$email', '$no_handphone', '$pesan')";
  $result = mysqli_query($db_link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db_link).
           " - ".mysqli_error($db_link));
  }
}

// melakukan redirect (mengalihkan) ke halaman videopengumuman.php

header("location:../contact.php");
?>