<?php


    $id=($_GET['id']);

//delet queary
$conect_database=mysqli_connect('localhost','root','','kufa');
$image_delet_querry="DELETE FROM `footerimages` WHERE id='$id'";
$image_delet_querry_db=mysqli_query($conect_database,$image_delet_querry);
header("location:./image_list.php");


?>