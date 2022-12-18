<?php
session_start();
 $id=$_POST['id'];
$service_icon=$_POST['service_icon'];
$service_value=$_POST['service_value'];


$service_tittle=$_POST['service_tittle'];



    $conect_database=mysqli_connect('localhost','root','','kufa');
    $update_servicetwo_quary="UPDATE `servicestwoo` SET `service_icon`='$service_icon',`service_value`='$service_value',`service_tittle`='$service_tittle' WHERE id='$id'";
   $update_servicetwo_quary_db=mysqli_query($conect_database,$update_servicetwo_quary);
  
   $_SESSION['sucess_data']=" update services sucessfull";
   header("location:./servicetwo_list.php");
  


?>