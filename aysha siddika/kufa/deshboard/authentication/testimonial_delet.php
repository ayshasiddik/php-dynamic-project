<?php




$id=($_GET['id']);

//delet queary
$conect_database=mysqli_connect('localhost','root','','kufa');
$image_service_delet_querry="DELETE FROM `testimonialservices` WHERE id='$id'";
$image_service_delet_querry_db=mysqli_query($conect_database,$image_service_delet_querry);
header("location:./testimonial_list.php");


?>