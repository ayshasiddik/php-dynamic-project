<?php
session_start();
 $id=$_POST['id'];
$service_icon=$_POST['service_icon'];


$service_tittle=$_POST['service_tittle'];
$service_description=$_POST['service_description'];
$service_status=$_POST['service_status'];



    $conect_database=mysqli_connect('localhost','root','','kufa');
    $update_service_quary="UPDATE `services` SET `service_icon`='$service_icon',`service_tittle`='$service_tittle',`service_description`='$service_description',`service_status`='$service_status' WHERE id='$id'";
   $update_service_quary_db=mysqli_query($conect_database,$update_service_quary);
   $_SESSION['sucess_data']=" update services sucessfull";
   header("location:./service_list.php");
  


?>