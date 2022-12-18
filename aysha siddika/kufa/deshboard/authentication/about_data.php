<?php
session_start();
$service_icon=$_POST['service_icon'];
$service_value=$_POST['service_value'];
$service_tittle=$_POST['service_tittle'];
$service_description=$_POST['service_description'];


$flag=false;
//cheking empty all feild
if($service_icon & $service_tittle & $service_description & $service_value){
         
}
else{
    $flag=true;
    $_SESSION['empty_error']="compeleted the service item";
  
}
if($flag){
    header("location:./about.php");
}else{
    $conect_database=mysqli_connect('localhost','root','','kufa');
    $insert_about_service_quary="INSERT INTO `abouts`(`service_icon`,`service_value`, `service_tittle`, `service_description`) VALUES ('$service_icon','$service_value','$service_tittle','$service_description')";
   $insert_about_service_quary_db=mysqli_query($conect_database,$insert_about_service_quary);
   $_SESSION['sucess_data']=" Add services sucessfull";
   header("location:./about.php");
}
?>