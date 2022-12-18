<?php
session_start();
$service_icon=$_POST['service_icon'];
$service_tittle=$_POST['service_tittle'];
$service_description=$_POST['service_description'];
$service_status=$_POST['service_status'];

$flag=false;
//cheking empty all feild
if($service_icon & $service_tittle & $service_description & $service_status){
         
}
else{
    $flag=true;
    $_SESSION['empty_error']="compeleted the service item";
  
}
if($flag){
    header("location:./service_add.php");
}else{
    $conect_database=mysqli_connect('localhost','root','','kufa');
    $insert_service_quary="INSERT INTO `services`( `service_icon`, `service_tittle`, `service_description`, `service_status`) VALUES ('$service_icon','$service_tittle','$service_description','$service_status')";
   $insert_service_quary_db=mysqli_query($conect_database,$insert_service_quary);
   $_SESSION['sucess_data']=" Add services sucessfull";
   header("location:./service_add.php");
}
?>