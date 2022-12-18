<?php
$id=($_GET['id']);

//delet queary
$conect_database=mysqli_connect('localhost','root','','kufa');
$servicetwo_delet_querry="DELETE FROM `servicestwoo` WHERE id='$id'";
$servicetwo_delet_querry_db=mysqli_query($conect_database,$servicetwo_delet_querry);
header("location:./servicetwo_list.php");
?>