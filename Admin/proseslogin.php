<?php

   session_start();
   require_once("koneksi.php");
   $username = mysqli_real_escape_string($db,$_POST['username']);
   $pass = mysqli_real_escape_string($db,$_POST['password']);
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:dashboard.php');
     }
   }
?>