<?php
session_start();
require_once('koneksi.php');
    if(!isset($_SESSION['username'])) {
      header('location:Login.php');
    } else {
       $username = $_SESSION['username'];

        $query = "SELECT * from user WHERE username ='".$username."' ";
        $select_user_profile_query = mysqli_query( $db, $query );
        if($select_user_profile_query) {
            while ($row = mysqli_fetch_array($select_user_profile_query)) {
                $username = $row['username'];
                $user_password = $row['password'];
                $role = $row['id_role'];
                $nama = $row['nama_user'];
                /*$user_image = $row['image'];
                $user_role = $row['user_role'];*/
            }
        }
    }
       
?>