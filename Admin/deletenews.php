<?php
include "koneksi.php";
if(isset($_GET['id_event'])):
     $stmt = $db_link->prepare("DELETE FROM event WHERE id_event=?");
     $stmt->bind_param('s', $id_event);
 
     $id_event = $_GET['id_event'];
 
     if($stmt->execute()):
          echo "<script>location.href='formnews.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>