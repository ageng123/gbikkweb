<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form

  $nama= $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_handphone'];
  $isi_doa = $_POST['isi_doa'];
  

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO doa (nama,alamat,no_handphone,isi_doa)
  VALUES ('$nama','$alamat','$no_hp','$isi_doa')";
  $result = mysqli_query($db_link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db_link).
           " - ".mysqli_error($db_link));
  }
}

// melakukan redirect (mengalihkan) ke halaman videopengumuman.php

header("location:../formdoa.php");
?>