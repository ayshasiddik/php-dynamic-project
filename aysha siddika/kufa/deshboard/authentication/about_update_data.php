<?php
session_start();
 $id=$_POST['id'];
$service_icon=$_POST['service_icon'];
$service_value=$_POST['service_value'];
$service_tittle=$_POST['service_tittle'];
$service_description=$_POST['service_description'];




    $conect_database=mysqli_connect('localhost','root','','kufa');
    $update_about_service_quary="UPDATE `abouts` SET `service_icon`='$service_icon',`service_value`='$service_value',`service_tittle`='$service_tittle',`service_description`='$service_description' WHERE id='$id'";
   $update_about_service_quary_db=mysqli_query($conect_database,$update_about_service_quary);
   $_SESSION['sucess_data']=" update services sucessfull";
   header("location:./about_list.php");
  


?>