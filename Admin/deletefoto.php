<?php
include "koneksi.php";
if(isset($_GET['id_foto'])):
     $stmt = $db_link->prepare("DELETE FROM gallerytbl WHERE id_foto=?");
     $stmt->bind_param('s', $id_foto);
 
     $id_foto = $_GET['id_foto'];
 
     if($stmt->execute()):
          echo "<script>location.href='formgallery.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>