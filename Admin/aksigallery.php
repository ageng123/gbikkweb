<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form

  $kategori= $_POST['kategori'];
  $deskripsi = $_POST['deskripsi'];
  
  
  $gambar   = $_FILES['gambar']['name'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO gallerytbl (kategori, deskripsi, gambar)
  VALUES ('$kategori', '$deskripsi', '$gambar')";
  $result = mysqli_query($db_link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db_link).
           " - ".mysqli_error($db_link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
move_uploaded_file($_FILES['gambar']['tmp_name'], "images/".$_FILES['gambar']['name']);
header("location:formgallery.php");
?>