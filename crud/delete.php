<?php

$con = new mysqli("localhost","root", "","db_surathilda");

  if(isset($_POST['delete'])) {
      $id=$_POST['id'];
      

      //Insert user data info table
      $result = mysqli_query($con, "DELETE FROM `tbl_surat` WHERE `tbl_surat`.`id` = $id" ); 

      header("Location:view.php");
    }

  ?>
