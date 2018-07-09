<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form

  $username= $_POST['username'];
  $password = $_POST['password'];
  $nama_user = $_POST['nama_user'];
  $email = $_POST['email'];
  $role = $_POST['role'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO user (username, password, nama_user, email,role)
  VALUES ('$username', '$password', '$nama_user', '$email','$role')";
  $result = mysqli_query($db_link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db_link).
           " - ".mysqli_error($db_link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php

header("location:form.php");
?>