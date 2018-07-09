<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form

  $judul= $_POST['judul'];
  $tanggal = $_POST['tanggal'];
  $keterangan = $_POST['keterangan'];
  $ket_detail = $_POST['ket_detail'];
  
  $gambar   = $_FILES['gambar']['name'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO event (judul, tanggal, gambar, keterangan, ket_detail)
  VALUES ('$judul', '$tanggal', '$gambar', '$keterangan', '$ket_detail')";
  $result = mysqli_query($db_link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db_link).
           " - ".mysqli_error($db_link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
move_uploaded_file($_FILES['gambar']['tmp_name'], "images/".$_FILES['gambar']['name']);
header("location:formnews.php");
?>