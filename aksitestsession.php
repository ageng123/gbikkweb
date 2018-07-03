<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
/*if(isset($_POST['login'])) {

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            if($_SESSION['username'] == 'user' and $_SESSION['password']=='123') {
                        header("location:home.php");
            } else {
                        // jika login salah //      
                        echo "Login gagal <a href='index.php'>Login</a>";

            }
}*/
include "koneksi.php";
$id_member=$_POST['id_member'];
$nopol=$_POST['nopol'];
$perintah=mysqli_query($db_link, "select id_member, nopol from member where id_member='$id_member' && nopol='$nopol'");
$ketersediaan=mysqli_num_rows($perintah);
$query_mysql = mysqli_query($db_link, "select id_member, nopol from member where id_member='$id_member' && nopol='$nopol'");
$data = mysqli_fetch_array($query_mysql);
if ($ketersediaan>0){

            $data['id_member']=$id_member;
            $data['nopol']=$nopol;
      header('location:dashboard.php');
}else{
            header("location:testsession.php");
}

?>
