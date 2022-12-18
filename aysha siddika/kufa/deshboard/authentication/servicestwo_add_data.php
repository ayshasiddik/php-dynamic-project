<?php
session_start();
$service_icon=$_POST['service_icon'];
$service_value=$_POST['service_value'];


$service_tittle=$_POST['service_tittle'];


$flag=false;
//cheking empty all feild
if($service_icon & $service_tittle & $service_tittle & $service_value){
         
}
else{
    $flag=true;
    $_SESSION['empty_error']="compeleted the service item";
  
}
if($flag){
    header("location:./servicetwo_add.php");
}else{
    $conect_database=mysqli_connect('localhost','root','','kufa');
    $insert_servicetwoo_quary="INSERT INTO `servicestwoo`( `service_icon`,`service_value`, `service_tittle`) VALUES ('$service_icon','$service_value','$service_tittle');";
   $insert_servicetwoo_quary_db=mysqli_query($conect_database,$insert_servicetwoo_quary);
   $_SESSION['sucess_data']=" Add services sucessfull";
   header("location:./servicetwo_add.php");
}
?>