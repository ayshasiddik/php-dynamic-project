<?php
$id=($_GET['id']);

//delet queary
$conect_database=mysqli_connect('localhost','root','','kufa');
$service_delet_querry="DELETE FROM `services` WHERE id='$id'";
$service_delet_querry_db=mysqli_query($conect_database,$service_delet_querry);
header("location:./service_list.php");
?>