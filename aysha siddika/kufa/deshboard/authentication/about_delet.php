<?php
$id=($_GET['id']);

//delet queary
$conect_database=mysqli_connect('localhost','root','','kufa');
$about_delet_querry="DELETE FROM `abouts` WHERE id='$id'";
$about_delet_querry_db=mysqli_query($conect_database,$about_delet_querry);
header("location:./about_list.php");
?>