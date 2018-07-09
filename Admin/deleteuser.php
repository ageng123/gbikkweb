<?php
include "koneksi.php";
if(isset($_GET['id'])):
     $stmt = $db_link->prepare("DELETE FROM user WHERE id=?");
     $stmt->bind_param('s', $id);
 
     $id = $_GET['id'];
 
     if($stmt->execute()):
          echo "<script>location.href='form.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>